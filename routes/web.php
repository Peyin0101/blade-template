<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/about', [PagesController::class, 'about'])->name('about');

Route::get('/get-started', [PagesController::class, 'getStarted'])->name('get-started');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');