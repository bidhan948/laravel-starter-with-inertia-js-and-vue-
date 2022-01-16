<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'authenticate']);

Route::get('/', function () {
    return Inertia::render('Login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/user', function () {
        return Inertia::render('User');
    });
    Route::get('/test',function(){
       return Inertia::render('Test');
    });
    Route::post('logout',[AuthController::class,'logout']);
    Route::get('product',[ProductController::class,'index']);
});