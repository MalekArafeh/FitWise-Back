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
        Schema::create('recieve', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mem_ID')
            ->constrained('members','mem_ID')
            ->onDelete('cascade');

            $table->foreignId('not_ID')
            ->constrained('notification','not_ID')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recieve');
    }
};
