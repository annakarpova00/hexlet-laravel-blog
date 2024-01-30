<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'index'])->name ('page.index');

Route::get('articles', [ArticleController::class, 'index'])
    ->name('articles.index');

Route::get('articles/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');

Route::get('articles/{id}', [ArticleController::class, 'show'])->name('articles.show');



