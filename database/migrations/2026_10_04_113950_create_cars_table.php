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
        Schema::create('cars', function (Blueprint $table) {
            $table->unsignedBigInteger('car_id')->primary();
            $table->foreignId('maker_id')->constrained('makers');
            $table->double('price');
            $table->string('vin', 255);
            $table->foreignId('car_type_id')->constrained('car_type');
            $table->string('fuel_type_id')->constrained('fuel_types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
