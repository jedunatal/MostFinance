<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Jorge Admin',
            'email' => 'admin@mostfinance.com',
            'password' => bcrypt('senha123'),
            'occupation' => 'Desenvolvedor',
            'currency' => 'BRL',
            'initial_balance' => 1000.00,
            // 'is_admin' => true, // Se você adicionar essa coluna depois
        ]);
    }
}
