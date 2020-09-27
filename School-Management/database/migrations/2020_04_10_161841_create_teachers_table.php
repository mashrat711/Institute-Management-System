<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('teacher_id')->nullable();
            $table->date('dob')->nullable();
            $table->string('designation')->nullable();
            $table->string('email')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->integer('national_id')->nullable();
            $table->string('sex')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('photo')->nullable();
            $table->string('type')->nullable();
            $table->longText('present_address')->nullable();
            $table->longText('permanent_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('status')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('relation')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->integer('children_no')->nullable();
            $table->string('extra_curricular_activity')->nullable();
            $table->date('marriage_date')->nullable();



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
        Schema::dropIfExists('teachers');
    }
}
