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
        Schema::create('phase_devices', function (Blueprint $table) {
            $table->unsignedBigInteger('phase_id');
            $table->unsignedBigInteger('device_id');
            $table->timestamps();

            $table->foreign('phase_id')->references('id')->on('phases')->onDelete('cascade');
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phase_devices');
    }
};
