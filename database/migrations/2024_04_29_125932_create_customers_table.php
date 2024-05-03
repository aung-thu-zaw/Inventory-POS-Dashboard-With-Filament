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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained();
            $table->foreignId('province_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->string('avatar')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('address');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
