<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint as Table;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Table $table) {
            $table->id();
            $table->string('Description'); // Descrição (ex: aluguel, salário, etc.)
            $table->decimal('Amount', 10, 2); // Valor da transação
            $table->date('Date'); // Data da transação
            $table->string('Type'); // 'income' (entrada) ou 'expense' (saída)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
