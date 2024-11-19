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
        Schema::create('ad_campaigns', function (Blueprint $table) {
            $table->id();

            $table->string('campaign_name');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->double('budget');
            $table->enum('status', ['active', 'paused', 'completed', 'cancelled', 'suspended'])->default('active');
            $table->text('description')->nullable();
            $table->foreignId('ad_platform_id')->nullable()->constrained('ad_platforms')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ad_campaigns');
    }
};
