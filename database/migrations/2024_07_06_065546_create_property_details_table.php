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
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id');
            $table->string('room_count')->nullable();
            $table->string('floor')->nullable();
            $table->string('floor_count')->nullable();
            $table->string('land_area')->nullable();
            $table->string('repair')->nullable();
            $table->string('build_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_details');
    }
};
