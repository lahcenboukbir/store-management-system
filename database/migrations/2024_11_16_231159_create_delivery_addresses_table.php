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
        Schema::create('delivery_addresses', function (Blueprint $table) {
            $table->id();

            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('city');
            $table->string('postal_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('label')->nullable(); // (e.g., "Home", "Office")
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_addresses');
    }
};
