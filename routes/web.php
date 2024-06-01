<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.auth-login2');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard', ['type_menu' => 'home']);
    })->name('home');
});
