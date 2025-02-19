<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//Route::apiResource('books', [BookController::class]);

Route::get('/books', [BookController::class,'index']);
Route::post('/books', [BookController::class,'store']);
Route::get('/books/{id}/{detail}', [BookController::class,'show']);
Route::put('/books/{id}', [BookController::class,'update']);
Route::delete('/books/{id}', [BookController::class,'destroy']);

Route::get('/users', [BookController::class,'index']);
Route::post('/users', [BookController::class,'store']);
