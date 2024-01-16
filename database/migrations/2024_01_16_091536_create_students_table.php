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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('edu_id', 11)->unique();
            $table->string('sign')->nullable();
            $table->string('primary_om', 10);
            $table->string('born_place');
            $table->date('born_date');
            $table->string('email')->nullable();
            $table->dateTimeTz('email_verified')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
