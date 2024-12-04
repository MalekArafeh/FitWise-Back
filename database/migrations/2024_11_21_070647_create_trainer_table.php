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
        Schema::create('trainer', function (Blueprint $table) {
            $table->id('trainer_ID');
            $table->string('trainer_name');
            $table->string('trainer_mail')->unique();
            $table->string('trainer_phone');
            $table->string('trainer_availability', 10);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainer');
    }
};
