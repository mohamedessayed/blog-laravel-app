<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use App\Http\Middleware\UserAuth;
use Illuminate\Support\Facades\Route;

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/app/blog',[WebsiteController::class,'blog'])->name('app.blog');
Route::get('/app/services',[WebsiteController::class,'services'])->name('app.service');

Route::middleware('guest')->group(function(){
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/signup',[AuthController::class,'signup'])->name('signup');

Route::post('/login',[AuthController::class,'login_handel'])->name('handel.login');
Route::post('/signup',[AuthController::class,'signup_handel'])->name('handel.signup');
});

Route::get('/logout',[AuthController::class,'logout'])->name('logout')->middleware('auth');


Route::middleware(UserAuth::class)->group(function(){


Route::prefix('dashboard')->group(function(){
    Route::resource('user',UserController::class);
    
    Route::get('book',[BookController::class,'index'])->name('book.index');
    Route::get('book/create',[BookController::class,'create'])->name('book.create');
    Route::post('book/store',[BookController::class,'store'])->name('book.store');
    Route::delete('book/destory/{book}',[BookController::class,'destroy'])->whereNumber('book')->name('book.delete');
    Route::get('book/view/{book}',[BookController::class,'show'])->whereNumber('book')->name('book.view');
    Route::get('book/edit/{book}',[BookController::class,'edit'])->whereNumber('book')->name('book.edit');
    Route::put('book/update/{book}',[BookController::class,'update'])->whereNumber('book')->name('book.update');

});

});

