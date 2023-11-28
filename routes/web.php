<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PromotionsController;
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
    return view('welcome');
});

Route::get('/rolunk', [AboutController::class, 'index'])->name('rolunk');
Route::get('/galeria', [GalleryController::class, 'index'])->name('galeria');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/kapcsolat', [ContactController::class, 'index'])->name('kapcsolat');
Route::get('/akciok', [PromotionsController::class, 'index'])->name('akciok');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/header', 'HeaderFooterController@getHeaderContent');

// Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index']);
//Route::get('/', [PostController::class, 'index']);
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/json-posts', [PostController::class, 'jsonPosts']);

Route::get('/categories', [CategoryController::class, 'index']);



Route::get('/footer', 'HeaderFooterController@getFooterContent');