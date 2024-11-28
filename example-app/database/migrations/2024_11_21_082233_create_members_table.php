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
        Schema::create('members', function (Blueprint $table) {
            $table->id('mem_ID');
            $table->string('mem_name');
            $table->integer('mem_age');
            $table->string('mem_phone');
            $table->string('mem_mail')->unique();
            $table->string('mem_height');
            $table->string('mem_weight');
            $table->string('mem_photo', 255);
            $table->string('mem_password');
            $table->string('mem_substatus');
            $table->date('date_of_join');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
