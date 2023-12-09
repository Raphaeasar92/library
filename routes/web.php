<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
// use App\Http\Controllers\HomeController;

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

Route::get('/books', [BookController::class, 'index', '__invoke'])->name('books');

Route::get('/books/create', [BookController::class, 'create', '__invoke']);
Route::post('/books/store', [BookController::class, 'store', '__invoke']);

Route::get('/books/{id}', [BookController::class, 'show', '__invoke']);

Route::get('/books/{id}', [BookController::class, 'store', '__invoke']);
Route::post('/books/{id}', [BookController::class, 'store', '__invoke']);

Route::get('/books/{id}/edit', [BookController::class, 'edit', '__invoke']);
Route::put('/books/{id}/edit', [BookController::class, 'edit', '__invoke']);

Route::delete('/books/{id}', [BookController::class, 'destroy', '__invoke']);

Auth::routes();

