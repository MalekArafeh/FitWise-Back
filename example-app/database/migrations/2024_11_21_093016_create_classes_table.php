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
        Schema::create('classes', function (Blueprint $table) {
            $table->id('class_ID');
            $table->string('class_Name');
            $table->date('class_Schedual');
            $table->string('class_Location');
            $table->string('class_Capacity');
            $table->foreignId('trainer_ID')
                  ->constrained('trainer','trainer_ID')
                  ->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};