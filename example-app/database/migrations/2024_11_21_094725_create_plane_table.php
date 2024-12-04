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
        Schema::create('plane', function (Blueprint $table) {
            $table->id('plan_ID');
            $table->string(column: 'plane_Name');
            $table->integer('plan_Price');
            $table->string(column: 'plane_Description');
            $table->time('time');
            $table->date('plan_Period');
            $table->timestamps();

             
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plane');
    }
};