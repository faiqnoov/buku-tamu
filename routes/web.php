<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DashboardController;

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
Route::resource('/dashboard/events', DashboardController::class);

// GUEST
Route::get('/', [EventController::class, 'index']);
    
Route::get('/form-tamu/{event}', [EventController::class, 'show']);