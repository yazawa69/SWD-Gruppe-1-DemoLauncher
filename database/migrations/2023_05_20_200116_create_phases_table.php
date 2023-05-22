<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        if(!Schema::hasTable('phases')){
            Schema::create('phases', function (Blueprint $table) {
                $table->id();
                $table->foreignId('scenario_id')->constrained()->onDelete('cascade');
                $table->timestamps();
                $table->string('name');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phases');
    }
};
