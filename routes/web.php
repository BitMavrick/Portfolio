<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/mail', [MainController::class, 'mail'])->name('mail');
