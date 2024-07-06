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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('state'); // 0 => sale, 1 => rent
            $table->string('property'); // office, garage, newbuilding ...
            $table->decimal('price', 15, 2);
            $table->text('detail')->nullable();
            $table->string('area');
            $table->string('extract')->nullable();
            $table->string('mortgage')->nullable();
            $table->integer('activity')->default(0)->comment('0 => waiting, 1 => active, 2 => passive, 3 => cancel');
            $table->ipAddress('visitor')->nullable();
            $table->integer('status')->default(0); // 0 => simple, 1 => premium, 2 => vip
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
