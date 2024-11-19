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
        Schema::create('blacklisted_customers', function (Blueprint $table) {
            $table->id();

            $table->string('notes')->nullable();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->foreignId('blacklist_reason_id')->nullable()->constrained('blacklist_reasons')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blacklisted_customers');
    }
};
