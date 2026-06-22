# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Overview

Al-Khair Charity Website is a **Laravel 8** (PHP 7.3/8.0) monolith with a server-rendered Blade
public site, a Blade + Vue 2 admin panel, and a MySQL database. It manages charity content
(news, events, research, donations, galleries, notice boards), people/alumni/team profiles,
volunteer/contact submissions, and a role-based admin with granular permissions.

## Commands

```bash
# Initial setup
composer install
php artisan key:generate
php artisan migrate          # OR import db/al_khair.sql into a local MySQL database named al_khair
php artisan db:seed          # seeds roles (see database/seeders/DatabaseSeeder.php)
npm install

# Frontend build (Laravel Mix / webpack)
npm run dev                  # one-off development build
npm run watch                # rebuild on change
npm run prod                 # minified production build

# Run the app
php artisan serve            # serves at http://127.0.0.1:8000

# Tests (PHPUnit)
php artisan test                                   # run all suites (Unit + Feature)
./vendor/bin/phpunit                               # equivalent
php artisan test --testsuite=Unit                  # single suite
php artisan test tests/Unit/VolunteerTest.php      # single file
php artisan test --filter=VolunteerTest            # single class/method by name

# Useful maintenance routes (also as CLI)
php artisan optimize:clear   # equivalent of the /cache-clear and /config debug routes
```

There is no PHP linter wired into CI here. Code style is enforced externally by **StyleCI**
(`.styleci.yml`, `laravel` preset, `no_unused_imports` disabled). Editor formatting is governed
by `.editorconfig` (4-space indent, LF, final newline; 2-space for YAML).

Local development assumes the host `http://al-khair.test/` (see `.env.example`,
`readme.md`). Admin login after seeding: `admin@gmail.com` / `12345678` at `/login`.

## Architecture

### Three route groups, three audiences

Routes are registered in `app/Providers/RouteServiceProvider.php`, **not** the default Laravel
mapping. This is the key to understanding the app:

- `routes/web.php` — public site, no prefix, `web` middleware. Almost every public page is a
  method on `App\Http\Controllers\Front\PageController` (homepage, single-* detail pages,
  donation, search). Public form submissions go to `ContactUsController` (contact + volunteer).
- `routes/back.php` — admin panel, **prefixed `adminx/`**, wrapped in
  `Route::middleware('auth', 'isAdmin', 'user.permission')`. Controllers live in
  `app/Http/Controllers/Back/` and are mostly `Route::resource(...)` declarations named with the
  `back.` prefix (e.g. `back.news.index`). When adding admin features, add the controller under
  `Back/`, register the resource in `back.php`, and add matching permission keys (see below).
- `routes/api.php` — prefixed `api/`, currently effectively empty (all routes commented out).

`RouteServiceProvider` also defines `HOME = '/'`, `DASHBOARD = 'adminx/dashboard'`, and
`AUTH_REDIRECT = 'member/dashboard'` constants used for post-login redirects.

### Admin access & the permission system

Two custom middleware gate the admin panel (registered in `app/Http/Kernel.php`):

- `isAdmin` (`AdminAccessMiddleware`) — aborts 403 unless `auth()->user()->type == 'admin'`.
- `user.permission` (`UserPermission` middleware) — delegates to the
  `App\Traits\UserPermission` trait's `checkRequestPermission()`.

Permissions are **not** standard Laravel Gates/Policies. A `User` belongsTo a `Role`
(`User::role()`), a `Role` hasOne `Permission` (`Role::permission()`), and the permission record
stores a nested array accessed as
`auth()->user()->role->permission['permission'][<resource>][<action>]` where action is
`list|add|edit`. `checkRequestPermission()` is a large chained `if/elseif` that matches the
current named route (e.g. `back.news.index`) against these keys and returns the dashboard view
when access is missing. **When you add an admin CRUD resource, you must extend this trait** to
guard its routes — otherwise the new routes are ungated. Note the middleware's `handle()`
currently calls `$next($request)` in both branches, so guarding happens by the trait returning a
view, not by the middleware blocking.

### Models

Eloquent models are in `app/Models/` (~35). The domain is content-heavy:
news/events/research/blogs/donations/galleries/notice-boards as content types, plus
`HomeSection`/`SectionName`/`SectionDesignType` driving the configurable homepage, `Settings`
for site config, `Menu`/`MenuItem` for navigation, and `User`/`Role`/`Permission` for auth.
Many models use `cviebrock/eloquent-sluggable` for `{slug}` route bindings used by the public
`single-*` routes. The `User` model is broad (member profiles, donation amount/payment fields,
mailing/permanent addresses) and exposes accessor attributes like `full_name`, `profile_path`,
`status_string` and a `scopeActive`.

### Settings & global helpers

`app/Repositories/Info.php` is **autoloaded globally as a file** (see `composer.json`
`autoload.files`) and is **not namespaced** — so `Info::Settings($group, $name)`,
`Info::SettingsGroup($group)`, etc. are callable directly from any Blade view/controller to read
the `Settings` table. Use this for site-wide config (logos, social links, contact info) rather
than re-querying `Settings`. Other repositories (`MediaRepo`, `NotificationRepo`,
`JsonResponse`) are conventional namespaced helpers under `App\Repositories`.

### Frontend / asset pipeline

- Build tool is **Laravel Mix** (`webpack.mix.js`). Two pipelines:
  - Admin: `resources/js/back/app.js` (Vue 2 SPA-ish components) + `resources/sass/back/app.scss`
    → `public/back/{js,css}`. Uses **Bootstrap 4 / BootstrapVue**, plus Vue plugins
    (`vue-select`, `vue2-editor`, `vue-pdf`, `v-toaster`, `vuex`, `vue-moment`).
  - Public: `resources/css/app.css` → `public/css` via **Tailwind** (`tailwind.config.js`
    scans `resources/**`).
- Blade views live in `resources/views/`: `front/` (public), `back/` (admin), `layouts/`
  (`master.blade.php`, `app.blade.php`), plus `auth/`, `email/`, `extra/`.

### Deployment specifics

- Targets **AWS Elastic Beanstalk** with nginx (`.platform/nginx/conf.d/elasticbeanstalk/`).
- Root `.htaccess` rewrites requests into `public/` and `server.php` (Apache shared-hosting
  style). `RedirectFromPublic` middleware 301-redirects away any URL that leaks `/public`.
- Integrations configured via `.env`: Stripe (`stripe/stripe-php`), OneSignal push, AWS S3,
  Pusher broadcasting, SMTP mail, `maatwebsite/excel` exports, `laravel-dompdf` PDFs,
  `milon/barcode`, `stevebauman/location`. Copy `.env.example` to `.env` and fill credentials.

## Conventions & gotchas

- Admin routes are named with the `back.` prefix and the panel is served under `/adminx`, not
  `/admin`. The dashboard is `adminx/dashboard`.
- New admin resource → controller in `Back/`, `Route::resource` in `routes/back.php`, and a
  branch in `App\Traits\UserPermission::checkRequestPermission()` plus permission seed data.
- `Info::` helpers are global (unnamespaced); don't add a `use` for them.
- Database can be bootstrapped either via migrations+seeders or by importing `db/al_khair.sql`.
- Tests under `tests/Feature/Http/Controllers/` (People*, Research) and `tests/Unit/` use the
  default mysql connection — the sqlite `:memory:` config in `phpunit.xml` is commented out, so
  a test database must be available, or re-enable those lines.
