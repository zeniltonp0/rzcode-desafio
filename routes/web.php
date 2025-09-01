<?php

use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', Register::class)->name('register');
});
