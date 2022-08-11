<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/events', function () {
    return view('admin.events');
});

Route::get('/events/add', function () {
    return view('admin.add-event');
});

Route::get('/events/detail', function () {
    return view('admin.event');
});

Route::get('/event-list', function () {
    return view('guest.event-list');
});

Route::get('/form-tamu', function () {
    return view('guest.form');
});
