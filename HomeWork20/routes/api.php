<?php

use App\Http\Controllers\Api\ApiAuthorController;
use App\Http\Controllers\Api\ApiPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Post
Route::get('posts', [ApiPostController::class, 'index']);
Route::post('posts', [ApiPostController::class, 'store']);
Route::put('posts/{id}', [ApiPostController::class, 'update']);
Route::delete('posts/{id}', [ApiPostController::class, 'destroy']);

//Author
Route::get('authors', [ApiAuthorController::class, 'index']);
Route::post('authors', [ApiAuthorController::class, 'store']);
Route::put('authors/{id}', [ApiAuthorController::class, 'update']);
Route::delete('authors/{id}', [ApiAuthorController::class, 'destroy']);
