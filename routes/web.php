<?php

use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;

// create toutes for the pages

Route::view('/about','about')->name('about');
Route::get('/',[TopicController::class,'index'])->name('home');
