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
        Schema::create('feature', function (Blueprint $table) {
            $table->id('cars_id');
            $table->boolean('abs')->default(0);
            $table->boolean('air_conditioning')->default(0);
            $table->boolean('power_windows')->default(0);
            $table->boolean('power_door_look')->default(0);
            $table->boolean('cruies_control')->default(0);
            $table->boolean('bluetooth_connectivity')->default(0);
            $table->boolean('remote_start')->default(0);
            $table->boolean('gps_navigation')->default(0);
            $table->boolean('heaters_seate_climate_control')->default(0);
            $table->boolean('rear_parking_sensor')->default(0);
            $table->boolean('leather_seat')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature');
    }
};
