<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherGraduationInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_graduation_infos', function (Blueprint $table) {
            $table->id();
            $table->string('college_name')->nullable();
            $table->unsignedBigInteger('teacher_id');
            $table->string('country')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('duration')->nullable();
            $table->string('grade')->nullable();
            $table->string('point')->nullable();
            $table->string('department')->nullable();
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
        Schema::dropIfExists('teacher_graduation_infos');
    }
}
