<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\queryController;

Route::get('/',[queryController::class,'home'])->name('home');
Route::get('/signup',[queryController::class,'signup'])->name('signup');
Route::post('/adduser',[queryController::class,'adduser'])->name('adduser');
Route::get('/signin',[queryController::class,'signin'])->name('signin');
Route::post('/finduser',[queryController::class,'finduser'])->name('finduser');
Route::get('/signout',[queryController::class,'signout'])->name('signout');
Route::post('/addnote',[queryController::class,'addnote'])->name('addnote');
Route::get('/editnote/{id}',[queryController::class,'editnote'])->name('editnote');
Route::post('/updatenote/{id}',[queryController::class,'updatenote'])->name('updatenote');
Route::get('/deletenote/{id}',[queryController::class,'deletenote'])->name('deletenote');
