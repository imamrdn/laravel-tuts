<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/article', [ArticleController::class, "index"]);
Route::get('/article/create', [ArticleController::class, "create"]);
Route::get('/article/{slug}', [ArticleController::class, "show"]);

Route::post('/article', [ArticleController::class, "store"]);