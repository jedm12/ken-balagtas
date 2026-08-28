<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('portfolio'))->name('home');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
