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
        Schema::create('gym', function (Blueprint $table) {
            $table->id();
            $table->string('gym_name');
            $table->string('password');
            $table->string('gym_description');
            $table->string('gym_rate');
            $table->string('gym_location');
            $table->string('gym_photos');
            $table->string('gym_mail')->unique();
            $table->string('gym_phone');
            $table->string('gym_machines');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym');
    }
};