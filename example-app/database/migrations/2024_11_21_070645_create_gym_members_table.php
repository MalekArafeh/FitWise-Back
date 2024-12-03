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
        Schema::create('gym_members', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('phone')->unique();
            $table->integer('age')->nullable();
            $table->string('picture', 255)->nullable();
            $table->integer('weight')->nullable();
            $table->integer('height')->nullable();
            $table->string('sub_status')->nullable();
            $table->date('date_of_join');
            $table->date('expiration_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_members');
    }
};
