<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login',[AuthController::class,'login']);


Route::middleware('auth:sanctum')->group(function(){

    Route::get('logout',[AuthController::class,'logout']);

    Route::resource('books',BookController::class);

});
