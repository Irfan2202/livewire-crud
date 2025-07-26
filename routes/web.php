<?php

use App\Livewire\UserEdit;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

Route::get('/user/{id}', [UserController::class, 'show'])->name('users.details');

Route::get('/user/{id}/edit', UserEdit::class)->name('user.edit');
