<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('/book', [BookController::class, 'index']);
//Route::post('/book', [BookController::class, 'store']);
//Route::get('/book/{id}', [BookController::class, 'show']);
//Route::put('/book/{id}', [BookController::class, 'update']);
//Route::delete('/book/{id}', [BookController::class, 'destroy']);

Route::resource('Book', BookController::class)->except('edit','create');
Route::resource('Author', AuthorController::class)->except('edit','create');
//Route::get('/author', [AuthorController::class, 'index']);
//phpRoute::post('/author', [AuthorController::class, 'store']);