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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->date('date_birth');
            $table->string('address');
            $table->string('city');
            $table->string('country'); 
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('family_info');
            $table->string('blood_type');
            $table->string('allergies');
            $table->string('dietary');
            $table->string('medications');
            $table->string('medical_cond');
            $table->string('surgeries');
            $table->string('accidents');
            $table->string('fm_history');
            $table->string('ref_name');
            $table->string('hdyh_about_us');
            $table->string('goal'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
