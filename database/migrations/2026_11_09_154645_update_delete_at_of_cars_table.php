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
        // drop column delete_at in cars table
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('delete_at');
        });
        Schema::table('cars', function (Blueprint $table) {
            $table->timestamp('delete_at')->nullable()->after('published_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('delete_at');
        });
    }
};
