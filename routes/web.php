<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Other Pages
Route::get('/', [PageController::class, 'homepage'])->name('homepage');

// Route::get('/home', [PageController::class, 'frontpage'])->name('frontpage');

Route::get('contact-us', [PageController::class, 'contactUs'])->name('contactUs');


Route::post('contact-us/form/submit', [\App\Http\Controllers\ContactUsController::class, 'contact'])->name('contact.us.store');

// Volunteer Registration

Route::get('volunteer-registration', [PageController::class, 'volunteerRegistration'])->name('volunteerRegistration');

Route::post('volunteer/form/submit', [\App\Http\Controllers\ContactUsController::class, 'volunteer'])->name('volunteer.store');

Route::get('page/{slug}', [PageController::class, 'commonPage'])->name('common.page');

Route::get('page/alumni/{slug}', [PageController::class, 'singleAlumni'])->name('single_alumni');

Route::get('single-people/{slug}', [PageController::class, 'singlePeople'])->name('single-people');
Route::get('single-research/{slug}', [PageController::class, 'singleResearch'])->name('single-research');
Route::get('news/{slug}', [PageController::class, 'singleNews'])->name('single-news');
Route::get('event/{slug}', [PageController::class, 'singleEvent'])->name('single-event');
Route::get('notice/{slug}', [PageController::class, 'singleNotice'])->name('single-notice');

// people list
Route::get('people-list/{name}', [PageController::class, 'peopleList'])->name('people-list');

// Search query
Route::get('search', [PageController::class, 'search'])->name('search');


// Auth Routes
Auth::routes();

Route::post('register', [AuthController::class, 'registerSubmit']);
Route::get('email-verify/{id}', [AuthController::class, 'emailVerify'])->name('emailVerify');
Route::get('resend-email-verify/{id}', [AuthController::class, 'resendVerifyLink'])->name('resendVerifyLink');
Route::get('email-verify-check/{id}', [AuthController::class, 'emailVerifyCheck'])->name('emailVerifyCheck');

// Test Routes
// Route::get('test',             [TestController::class, 'test'])->name('test');
Route::get('cache-clear',      [TestController::class, 'cacheClear'])->name('cacheClear');
Route::get('config',           [TestController::class, 'config'])->name('config');
