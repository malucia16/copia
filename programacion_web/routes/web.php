<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthorBookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('/books/{id}/', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');


/*
|--------------------------------------------------------------------------
| Web Routes de autor
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::delete('/authors/{id}', [AuthorController::class, 'destroy'])->name('authors.destroy');
Route::get('/authors/{id}/', [AuthorController::class, 'edit'])->name('authors.edit');
Route::put('/authors/{id}', [AuthorController::class, 'update'])->name('authors.update');



/*
|--------------------------------------------------------------------------
| Web Routes de  la relacion de autores libro 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/authors_books', [AuthorBookController::class, 'index'])->name('authors_books.index');
Route::post('/authors_books', [AuthorBookController::class, 'store'])->name('authors_books.store');
Route::delete('/authors_books/{id}', [AuthorBookController::class, 'destroy'])->name('authors_books.destroy');
Route::get('/authors_books/{id}/', [AuthorBookController::class, 'edit'])->name('authors_books.edit');
Route::put('/authors_books/{id}', [AuthorBookController::class, 'update'])->name('authors_books.update');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('role:admin')->group(function(){
    Route::get('/books/crear', [BookController::class, 'create'])->name('books.create');
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
