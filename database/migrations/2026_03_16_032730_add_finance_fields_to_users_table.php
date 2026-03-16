<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Dados de Perfil
            $table->string('occupation')->nullable()->after('name');
            $table->string('phone')->nullable()->after('email');
            $table->date('birth_date')->nullable()->after('occupation');

            // Dados Financeiros
            $table->string('currency', 3)->default('BRL')->after('password');
            $table->decimal('initial_balance', 15, 2)->default(0)->after('currency');
            
            /** * Dica: Usamos decimal(15,2) para valores financeiros. 
             * Nunca use float ou double para dinheiro devido a erros de arredondamento.
             */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'occupation', 
                'phone', 
                'birth_date', 
                'currency', 
                'initial_balance'
            ]);
        });
    }
};