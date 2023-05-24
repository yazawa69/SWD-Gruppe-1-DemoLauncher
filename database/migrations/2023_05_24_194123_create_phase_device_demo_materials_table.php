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
        Schema::create('phase_device_demo_materials', function (Blueprint $table) {
            $table->timestamps();
            
            $table->foreignId('phase_device_id')->references('id')->on('phase_devices')->onDelete('cascade');
            $table->foreignId('demo_material_id')->references('id')->on('demo_materials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phase_device_demo_materials');
    }
};
