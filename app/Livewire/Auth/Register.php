<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Criar Conta - MostFinance')]
class Register extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    
    // Campos Financeiros
    public string $currency = 'BRL';
    public $initial_balance = 0;
    public string $occupation = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
        'currency' => 'required|in:BRL,USD,EUR',
        'initial_balance' => 'required|numeric',
    ];

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'currency' => $this->currency,
            'initial_balance' => $this->initial_balance,
            'occupation' => $this->occupation,
        ]);

        Auth::login($user);

        return redirect()->intended('/dashboard');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}