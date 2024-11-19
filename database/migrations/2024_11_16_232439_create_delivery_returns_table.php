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
        Schema::create('delivery_returns', function (Blueprint $table) {
            $table->id();

            $table->date('return_date');
            $table->enum('status', ['pending', 'completed', 'denied'])->default('pending');
            $table->string('notes')->nullable();
            $table->double('refund_amount');
            $table->string('return_reason')->nullable(); // "damaged item", "incorrect item"
            $table->foreignId('delivery_order_id')->constrained('delivery_orders')->onDelete('cascade');
            $table->foreignId('return_type_id')->nullable()->constrained('return_types')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_returns');
    }
};
