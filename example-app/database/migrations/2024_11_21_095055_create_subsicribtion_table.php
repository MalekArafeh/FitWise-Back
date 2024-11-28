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
        Schema::create('subsicribtion', function (Blueprint $table) {
            $table->id('sub_ID');
            $table->string('sub_Type');
            $table->string('sub_status');
            $table->date('renwal_Date');
            $table->integer('sub_Price');
            $table->foreignId('plan_ID')
                  ->constrained('plane','plan_ID')
                  ->onDelete('cascade');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subsicribtion');
    }
};
