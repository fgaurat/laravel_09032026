<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todolist',[TodoListController::class,'index'])->name('todolist.index');
Route::get('/todolist/show/{todoList}',[TodoListController::class,'show'])->name('todolist.show');
Route::post('/todolist/store',[TodoListController::class,'store'])->name('todolist.store');


Route::resource('todo', TodoController::class);
