<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth', [
        'title' => 'Login',
        'subtitle' => 'Masuk ke akun Anda',
        'mode' => 'login'
    ]);
})->name('login');

Route::get('/register', function () {
    return view('auth', [
        'title' => 'Daftar',
        'subtitle' => 'Buat akun baru',
        'mode' => 'register'
    ]);
})->name('register');