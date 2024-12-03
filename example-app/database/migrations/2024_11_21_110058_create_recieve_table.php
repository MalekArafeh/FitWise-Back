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
<<<<<<< HEAD
            $table->foreignId('mem_id')
            ->constrained('gym_members','id')
            ->onDelete('cascade');
=======
            $table->foreignId('mem_ID')
                ->constrained('gym_members', 'id')
                ->onDelete('cascade');
>>>>>>> 3348a7f9f6fef3e4b5e230393e947007086ca25e

            $table->foreignId('not_ID')
                ->constrained('notification', 'not_ID')
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
