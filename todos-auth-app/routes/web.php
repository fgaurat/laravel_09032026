<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::inertia('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});



Route::inertia('/hello', 'hello',)->name('hello');
// Route::inertia('/todolists', 'todolists')->name('todolists');
Route::get('/todolists', [TodoListController::class, 'index'])->name('todolists');


Route::get('/hello2',[HelloController::class,'index'])->name('hello2.index');




require __DIR__ . '/settings.php';
