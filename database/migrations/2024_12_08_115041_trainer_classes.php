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
        Schema::create('trainer_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trainer_id')
                ->constrained('trainer', 'id')
                ->onDelete('cascade');

            $table->foreignId('class_id')
                ->constrained('classes', 'id')
                ->onDelete('cascade');
            $table->timestamps();});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
