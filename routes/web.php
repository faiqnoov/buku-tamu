<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

// ADMIN
Route::get('/events', [EventController::class, 'index']);

Route::get('/events/add', function () {
    return view('admin.add-event');
});

Route::get('/events/{id}', [EventController::class, 'show']);

// GUEST
Route::get('/event-list', [EventController::class, 'indexGuest']);
    
Route::get('/form-tamu/{id}', [EventController::class, 'showGuest']);