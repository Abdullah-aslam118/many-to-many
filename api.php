<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\author;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('index', [HomeController::class,'index']);
Route::get('Book', [HomeController::class,'Book']);
Route::get('Booksear/{id}', [HomeController::class,'Booksear']);
Route::post('addbook', [HomeController::class,'addbook']);
Route::post('upbook/{id}', [HomeController::class,'upbook']);
Route::delete('delbook/{id}', [HomeController::class,'delbook']);




Route::get('author', [author::class,'author']);
Route::get('authorsear/{id}', [author::class,'authorsear']);
Route::post('addauthor', [ author::class,'addauthor']);
Route::post('upauthor/{id}', [ author::class,'upauthor']);
Route::delete('delauthor/{id}', [ author::class,'delauthor']);
