<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReservationController;


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

Route::get('/', function () {
    return redirect()->route('login');
});
 
Route::get('/home', [BookController::class, 'home', '__invoke'])->name('home');
Route::get('/dashboard', [BookController::class, 'home', '__invoke'])->name('dashboard');

// Books Routes

Route::get('/books', [BookController::class, 'index', '__invoke'])->name('books');

Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store']);

Route::get('/books/{id}', [BookController::class, 'show']);

Route::get('/books/{id}/edit', [BookController::class, 'edit']);
Route::post('/books/{id}', [BookController::class, 'update']);

Route::delete('/books/{id}', [BookController::class, 'destroy']);

// Reservation Routes

Route::get('/reservations', [ReservationController::class, 'index', '__invoke'])->name('reservations');

Route::get('/reservations/create', [ReservationController::class, 'create']);
Route::post('/reservations', [ReservationController::class, 'store']);

Route::get('/reservations/{id}', [ReservationController::class, 'show']);

Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit']);
Route::post('/reservations/{id}', [ReservationController::class, 'update']);

Route::delete('/reservations/{id}', [ReservationController::class, 'destroy']);



Auth::routes();

