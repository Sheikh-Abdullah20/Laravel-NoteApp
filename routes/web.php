<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\queryController;

Route::get('/',[queryController::class,'home'])->name('home');
Route::get('/signin',[queryController::class,'signin'])->name('signin');
Route::get('/signup',[queryController::class,'signup'])->name('signup');
Route::post('/adduser',[queryController::class,'adduser'])->name('adduser');