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
        Schema::table('classes', function (Blueprint $table) {
            // Renaming "emp_name" to "employee_name"
            $table->string('class_Capacity')->nullable()->change(); // Change Datatype length
            $table->string('class_Location')->nullable()->change(); // Change Datatype length // Add "status" column
            $table->dropForeign(['trainer_ID']);
            $table->dropColumn('trainer_ID');
            $table->dropColumn('Time');
            $table->dropColumn('Date');
            $table->dateTime('start_date');
            $table->dateTime('end_date');

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
