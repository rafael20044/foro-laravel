<?php

use Illuminate\Support\Facades\Route;

// create toutes for the pages
Route::view('/', 'welcome')->name('home');
Route::view('/about','about')->name('about');

