<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneBookController;

Route::get('/', [PhoneBookController::class, 'index'])->name('phoneBook');
Route::post('/create-contact', [PhoneBookController::class, 'create'])->name('create-contact');
Route::get('/edit-contact/{id}', [PhoneBookController::class, 'edit'])->name('edit-contact');
Route::post('/update-contact/{id}', [PhoneBookController::class, 'update'])->name('update-contact');
Route::get('/delete-contact/{id}', [PhoneBookController::class, 'delete'])->name('delete-contact');
