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
        Schema::create('tracking_delivery_statuses', function (Blueprint $table) {
            $table->id();

            $table->enum('status', ['pending', 'in_transit', 'completed', 'failed'])->default('pending');
            $table->string('notes')->nullable();
            $table->string('tracking_number')->nullable();
            $table->foreignId('delivery_order_id')->constrained('delivery_orders')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracking_delivery_statuses');
    }
};
