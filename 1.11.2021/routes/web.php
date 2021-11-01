<?php

use App\Http\Controllers\Admins\CategoryController;
use App\Http\Controllers\Admins\LocaleController;
use App\Http\Controllers\Admins\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);

Route::get('/admin/posts', [PostController::class, 'index'])->name('admin.posts');
Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
Route::get('/admin/posts/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
Route::post('/admin/posts/update', [PostController::class, 'update'])->name('admin.posts.update');
Route::post('/admin/posts', [PostController::class, 'store'])->name('admin.posts.store');
Route::post('/admin/posts/delete', [PostController::class, 'delete'])->name('admin.posts.delete');

Route::get('locale/{code}', [LocaleController::class, 'setLocale'])->name('locale');

Route::resource('/admin/categories', CategoryController::class);
