<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    Log::info("Route hello");
    return view('hello');
});


Route::get('/hello/show',[HelloController::class,"show"])->name('hello.show');
Route::get('/hello/form',[HelloController::class,"form"])->name('hello.form');
Route::post('/hello/to_upper',[HelloController::class,"upper"])->name('hello.upper');
