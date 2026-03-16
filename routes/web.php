<?php

use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Register;

// Tela Principal (Login do Usuário)
Route::get('/', Login::class)->name('login');

// Rota de Dashboard (Para onde o usuário vai após logar)
Route::middleware('auth')->get('/dashboard', function () {
    return view('filament.pages.home'); // Ou seu componente de dashboard
})->name('dashboard');

Route::get('/register', Register::class)->name('register');