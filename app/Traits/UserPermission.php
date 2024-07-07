<?php

namespace App\Traits;

trait UserPermission{
    public function checkRequestPermission(){
        if(
            empty(auth()->user()->role->permission['permission']['admins']['list']) && \Route::is('back.admins.index') ||
            empty(auth()->user()->role->permission['permission']['admins']['add']) && \Route::is('back.admins.create') ||
            empty(auth()->user()->role->permission['permission']['admins']['edit']) && \Route::is('back.admins.edit')
        ){
            return response()->view('back.dashboard');
        }elseif(
            empty(auth()->user()->role->permission['permission']['role']['list']) && \Route::is('back.role.index') ||
            empty(auth()->user()->role->permission['permission']['role']['add']) && \Route::is('back.role.create') ||
            empty(auth()->user()->role->permission['permission']['role']['edit']) && \Route::is('back.role.edit')
        ){
            return response()->view('back.dashboard');
        }elseif (
            empty(auth()->user()->role->permission['permission']['permissions']['list']) && \Route::is('back.permission.index') ||
            empty(auth()->user()->role->permission['permission']['permissions']['add']) && \Route::is('back.permission.create') ||
            empty(auth()->user()->role->permission['permission']['permissions']['edit']) && \Route::is('back.permission.edit')
        ) {
            return response()->view('back.dashboard');
        }elseif (
            empty(auth()->user()->role->permission['permission']['news']['list']) && \Route::is('back.news.index') ||
            empty(auth()->user()->role->permission['permission']['news']['add']) && \Route::is('back.news.create') ||
            empty(auth()->user()->role->permission['permission']['news']['edit']) && \Route::is('back.news.edit')
        ) {
            return response()->view('back.dashboard');
        }elseif (
            empty(auth()->user()->role->permission['permission']['events']['list']) && \Route::is('back.events.index') ||
            empty(auth()->user()->role->permission['permission']['events']['add']) && \Route::is('back.events.create') ||
            empty(auth()->user()->role->permission['permission']['events']['edit']) && \Route::is('back.events.edit')
        ) {
            return response()->view('back.dashboard');
        }elseif (
            empty(auth()->user()->role->permission['permission']['research']['list']) && \Route::is('back.research.index') ||
            empty(auth()->user()->role->permission['permission']['research']['add']) && \Route::is('back.research.create') ||
            empty(auth()->user()->role->permission['permission']['research']['edit']) && \Route::is('back.research.edit')
        ) {
            return response()->view('back.dashboard');
        }elseif (
            empty(auth()->user()->role->permission['permission']['people']['list']) && \Route::is('back.people-list.index') ||
            empty(auth()->user()->role->permission['permission']['people']['add']) && \Route::is('back.people-list.create') ||
            empty(auth()->user()->role->permission['permission']['people']['edit']) && \Route::is('back.people-list.edit')
        ) {
            return response()->view('back.dashboard');
        }elseif (
            empty(auth()->user()->role->permission['permission']['alumni']['list']) && \Route::is('back.alumni.index') ||
            empty(auth()->user()->role->permission['permission']['alumni']['add']) && \Route::is('back.alumni.create') ||
            empty(auth()->user()->role->permission['permission']['alumni']['edit']) && \Route::is('back.alumni.edit')
        ) {
            return response()->view('back.dashboard');
        }elseif (
            empty(auth()->user()->role->permission['permission']['notice-board']['list']) && \Route::is('back.notice-board.index') ||
            empty(auth()->user()->role->permission['permission']['notice-board']['add']) && \Route::is('back.alumni.create') ||
            empty(auth()->user()->role->permission['permission']['notice-board']['edit']) && \Route::is('back.alumni.edit')
        ) {
            return response()->view('back.dashboard');
        }elseif (
            empty(auth()->user()->role->permission['permission']['galleries']['list']) && \Route::is('back.galleries.index') ||
            empty(auth()->user()->role->permission['permission']['galleries']['add']) && \Route::is('back.galleries.create') ||
            empty(auth()->user()->role->permission['permission']['galleries']['edit']) && \Route::is('back.galleries.edit')
        ) {
            return response()->view('back.dashboard');
        }elseif (
            empty(auth()->user()->role->permission['permission']['pages']['list']) && \Route::is('back.pages.index') ||
            empty(auth()->user()->role->permission['permission']['pages']['add']) && \Route::is('back.pages.create') ||
            empty(auth()->user()->role->permission['permission']['pages']['edit']) && \Route::is('back.pages.edit')
        ) {
            return response()->view('back.dashboard');
        }elseif (
            empty(auth()->user()->role->permission['permission']['menus']['list']) && \Route::is('back.menus.index')
        ) {
            return response()->view('back.dashboard');
        }elseif (
            empty(auth()->user()->role->permission['permission']['settings']['list']) && \Route::is('back.frontend.general')
        ) {
            return response()->view('back.dashboard');
        }elseif (
            empty(auth()->user()->role->permission['permission']['request-contact']['list']) && \Route::is('back.request-contact.index')
        ) {
            return response()->view('back.dashboard');
        }
    }
}
