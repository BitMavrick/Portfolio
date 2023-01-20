<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\generalController;

Route::get('/msgs', [generalController::class, 'messages'])->name('messages');