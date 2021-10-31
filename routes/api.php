<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('Book', BookController::class)->except('create', 'edit');
Route::resource('Author', AuthorController::class)->except('create','edit');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/book', [BookController::class, 'index']);
Route::get('/author', [AuthorController::class, 'index']);
//Route::post('/book', [BookController::class, 'store']);
Route::get('/book/{id}', [BookController::class, 'show']);
Route::get('/author/{id}', [AuthorController::class, 'show']);
//Route::put('/book/{id}', [BookController::class, 'update']);
//Route::delete('/book/{id}', [BookController::class, 'destroy']);

//Route::resource('Book', BookController::class)->except('edit','create');
//Route::resource('Author', AuthorController::class)->except('edit','create');

// Route::group(['middleware' => ['auth:sanctum']], function(){
//     Route::resource('Book', BookController::class)->except('create', 'edit');
//     Route::post('/logout', [AuthController::class, 'logout']);
// });

Route::middleware('auth:sanctum')->group(function(){
    Route::resource('Book', BookController::class)->except('create', 'edit', 'index', 'show');
    Route::resource('Author', AuthorController::class)->except('crete', 'edit', 'index', 'show');
    Route::post('/logout', [AuthController::class, 'logout']);
});