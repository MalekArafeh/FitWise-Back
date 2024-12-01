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
        Schema::create('used', function (Blueprint $table) {
            $table->id();

            $table->foreignId('mem_ID')
            ->constrained('members','mem_ID')
            ->onDelete('cascade');

            $table->foreignId('class_ID')
            ->constrained('classes','class_ID')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('used');
    }
};