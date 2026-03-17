<?php

use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Register;
use App\Livewire\Auth;

// Tela Principal (Login do Usuário)
Route::get('/', Login::class)->name('login');

Route::get('/register', Register::class)->name('register');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

