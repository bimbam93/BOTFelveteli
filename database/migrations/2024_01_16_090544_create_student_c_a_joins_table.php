<?php

use App\Models\Student;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_c_a_joins', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class);

            $table->string('room');

            $table->boolean('spec');
            $table->integer('math_extra_time');
            $table->integer('lit_extra_time');

            $table->boolean('lit_extra_text_editor');
            $table->boolean('math_extra_text_editor');
            $table->boolean('math_extra_calc');

            $table->boolean('lit_low_maxpoint');
            $table->boolean('math_low_maxpoint');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_c_a_joins');
    }
};
