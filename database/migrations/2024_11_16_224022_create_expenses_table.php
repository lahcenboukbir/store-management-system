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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();

            $table->enum('expense_type', ['fixed', 'variable', 'one_time']);
            $table->double('amount');
            $table->date('due_date')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('recurring_expense_id')->nullable()->constrained('recurring_expenses')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
