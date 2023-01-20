<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\generalController;


Route::get('/', [generalController::class, 'home'])->name('home');
Route::post('/contact', [generalController::class, 'store'])->name('contact.store');