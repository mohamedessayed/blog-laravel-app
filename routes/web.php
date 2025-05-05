<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('index');
})->name('home');


Route::get('/app/blog',function(){
    return view('pages.blog');
})->name('app.blog');


Route::get('/app/services',function(){
    return view('pages.service');
})->name('app.service');