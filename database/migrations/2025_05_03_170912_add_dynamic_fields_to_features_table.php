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
        Schema::table('features', function (Blueprint $table) {
            $table->json('carousel_images')->nullable(); // To store up to 3 images for the carousel
            $table->string('grade')->nullable();
            $table->string('set')->nullable();
            $table->string('signal')->nullable();
            $table->string('completeness')->nullable();
            $table->string('sparepart')->nullable();
            $table->string('originality')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('features', function (Blueprint $table) {
            //
        });
    }
};
