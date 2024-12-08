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
        Schema::create('plan_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mem_ID')
                ->constrained('gym_members', 'id')
                ->onDelete('cascade');

            $table->foreignId('plan_id')
                ->constrained('plans', 'id')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
