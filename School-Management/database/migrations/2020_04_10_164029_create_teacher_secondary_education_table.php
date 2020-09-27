<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherSecondaryEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_secondary_education', function (Blueprint $table) {
            $table->id();
            $table->string('school_name')->nullable();
            $table->unsignedBigInteger('teacher_id');
            $table->string('district')->nullable();
            $table->string('educational_system')->nullable();
            $table->string('name_of_exam')->nullable();
            $table->string('board_name')->nullable();
            $table->string('group')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('gpa')->nullable();
            $table->string('point')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_secondary_education');
    }
}
