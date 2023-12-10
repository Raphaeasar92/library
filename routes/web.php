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

Route::get('/books/create', [BookController::class, 'create', '__invoke']);
Route::post('/books/store', [BookController::class, 'store', '__invoke']);

Route::get('/books/{id}', [BookController::class, 'show', '__invoke']);

Route::get('/books/{id}', [BookController::class, 'store', '__invoke']);
Route::post('/books/{id}', [BookController::class, 'store', '__invoke']);

Route::get('/books/{id}/edit', [BookController::class, 'edit', '__invoke']);
Route::put('/books/{id}/edit', [BookController::class, 'edit', '__invoke']);

Route::delete('/books/{id}', [BookController::class, 'destroy', '__invoke']);

// Reservation Routes

Route::get('/reservations', [ReservationController::class, 'index', '__invoke'])->name('reservations');

Route::get('/reservations/create', [ReservationController::class, 'create', '__invoke']);
Route::post('/reservations/store', [ReservationController::class, 'store', '__invoke']);

Route::get('/reservations/{id}', [ReservationController::class, 'show', '__invoke']);

Route::get('/reservations/{id}', [ReservationController::class, 'store', '__invoke']);
Route::post('/reserations/{id}', [ReservationController::class, 'store', '__invoke']);

Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit', '__invoke']);
Route::put('/reservations/{id}/edit', [ReservationController::class, 'edit', '__invoke']);

Route::delete('/reservations/{id}', [ReservationController::class, 'destroy', '__invoke']);




Auth::routes();

