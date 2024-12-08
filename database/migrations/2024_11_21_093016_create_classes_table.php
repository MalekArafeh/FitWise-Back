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
            $table->id('id');
            $table->string(column: 'Name');
            $table->string(column: 'Time');
            $table->date('Date');
            
            $table->string('class_Location');
            $table->string('class_Capacity');
            $table->foreignId('trainer_ID')
                  ->constrained('trainer','id')
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