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
        Schema::create('demo_materials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('demo_material_type_id')->constrained();
            $table->timestamps();
            $table->string('name');
            $table->string('file_path');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demo_materials');
    }
};
