<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/article/{article:slug}', [ArticleController::class, 'index'])->name('getArticle');

Route::get('/category/{category}', [CategoryController::class, 'index'])->name('category');

Route::controller(WriterController::class)->group(function () {
    Route::get('/writer', 'index')->name('writers');
    Route::get('/writer/{writer}', 'getWriterArticles')->name('getWriterArticles');
});
Route::get('/popular', [PopularController::class, 'index']);
