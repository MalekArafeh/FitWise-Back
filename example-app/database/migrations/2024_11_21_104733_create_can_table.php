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
        Schema::create('can', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mem_ID')
                ->constrained('gym_members', 'id')
                ->onDelete('cascade');

            $table->foreignId('sub_ID')
                ->constrained('subsicribtion', 'sub_ID')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('can');
    }
};
