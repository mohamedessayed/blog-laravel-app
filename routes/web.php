<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/app/blog',[WebsiteController::class,'blog'])->name('app.blog');
Route::get('/app/services',[WebsiteController::class,'services'])->name('app.service');


Route::get('books',[BookController::class,'index']);