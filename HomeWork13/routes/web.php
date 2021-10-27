<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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

//Home
Route::get('/', [HomeController::class, 'index']);

//Products
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/show', [ProductsController::class, 'show']);
Route::get('/products/renderProductTable', [ProductsController::class, 'renderProductTable']);
Route::post('/products/delete', [ProductsController::class, 'delete']);
Route::post('/products/create', [ProductsController::class, 'create']);
