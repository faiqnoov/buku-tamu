<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| He re is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ADMIN
Route::resource('/dashboard/events', DashboardController::class)->names([
  'show' => 'event'
]);

Route::delete('/dashboard/events/{event}/{guest}', [GuestController::class, 'delete']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// GUEST
Route::get('/', [EventController::class, 'index']);
    
Route::get('/form-tamu/{event}', [GuestController::class, 'create'])->name('form');
Route::post('/form-tamu/{event}', [GuestController::class, 'store']);