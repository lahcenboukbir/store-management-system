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
        Schema::create('delivery_orders', function (Blueprint $table) {
            $table->id();

            $table->double('delivery_price');
            $table->date('arrival_date');
            $table->integer('quantity');
            $table->foreignId('sale_id')->constrained('sales')->onDelete('cascade');
            $table->foreignId('delivery_company_id')->nullable()->constrained('delivery_companies')->onDelete('set null');
            $table->foreignId('delivery_address_id')->nullable()->constrained('delivery_addresses')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_orders');
    }
};
