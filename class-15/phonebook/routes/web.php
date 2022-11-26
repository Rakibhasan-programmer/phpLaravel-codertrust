<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneBookController;

Route::get('/', [PhoneBookController::class, 'index'])->name('phoneBook');
Route::post('/create-contact', [PhoneBookController::class, 'create'])->name('create-contact');
