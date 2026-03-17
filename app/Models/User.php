<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Os atributos que podem ser preenchidos em massa.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'occupation',
        'phone',
        'birth_date',
        'currency',
        'initial_balance',
        'is_admin', // Adicionado para o controle de acesso
    ];

    /**
     * Atributos escondidos para serialização.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casts de atributos.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'birth_date' => 'date',
            'initial_balance' => 'decimal:2',
            'is_admin' => 'boolean', // Garante que retorne true/false
        ];
    }

    /**
     * Implementação do FilamentUser: Define quem acessa o /admin
     */
    public function canAccessPanel(\Filament\Panel $panel): bool
    {
        // Se estiver tentando entrar no Admin, checa se é administrador
        if ($panel->getId() === 'admin') {
            return (bool) $this->is_admin;
        }

        // Se estiver tentando entrar no App (Dashboard), todos logados entram
        if ($panel->getId() === 'app') {
            return true;
        }

        return false;
    }
}
