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
        Schema::table('gym', function (Blueprint $table) {
            // Renaming "emp_name" to "employee_name"
            $table->string('gym_description')->nullable()->change(); // Change Datatype length
            $table->string('gym_rate')->nullable()->change(); // Change Datatype length // Add "status" column
            $table->string('gym_location')->nullable()->change(); // Change Datatype length // Add "status" column
            $table->string('gym_photos')->nullable()->change(); // Change Datatype length // Add "status" column
            $table->string('gym_machines')->nullable()->change(); // Change Datatype length // Add "status" column
            $table->string('gym_phone')->nullable()->change(); // Change Datatype length // Add "status" column


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
