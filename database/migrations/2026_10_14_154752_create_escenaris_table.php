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
        Schema::create('escenaris', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->unique();
            $table->unsignedInteger('aforament_maxim');
            $table->string('ubicacio');
            $table->boolean('cobert')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escenaris');
    }
};
