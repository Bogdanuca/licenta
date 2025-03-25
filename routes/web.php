<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/recognition', function () {
    return view('recognition');
})->name('recognition');

Route::get('/details', function () {
    return view('details');
})->name('details');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/database', [DatabaseController::class, 'index'])->name('database');
Route::get('/recipe/{slug}', [RecipeController::class, 'show'])->name('recipe.show');