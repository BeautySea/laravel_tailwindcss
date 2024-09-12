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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('energy')->nullable();
            $table->string('pain')->nullable();
            $table->string('anxiety')->nullable();
            $table->text('where_is_pain')->nullable();
            $table->text('main_complaint')->nullable();
            $table->text('general_note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
