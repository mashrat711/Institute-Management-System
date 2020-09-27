<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('nationality')->nullable();
            $table->string('photo')->nullable();
            $table->string('email')->nullable();
            $table->string('group')->nullable();
            $table->string('mobile')->nullable();
            $table->string('extra_Curricular_Activity')->nullable();
            $table->longText('note')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('fathers_phone_no')->nullable();
            $table->string('mothers_phone_no')->nullable();
            $table->string('local_guardian')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('local_guardians_phone')->nullable();
            $table->string('registration_no')->nullable();
            $table->string('class')->nullable();
            $table->string('section')->nullable();
            $table->string('shift')->nullable();
            $table->string('id_card_no')->nullable();
            $table->string('roll')->nullable();
            $table->string('optional_sub')->nullable();
            $table->string('house_name')->nullable();
            $table->string('house_no')->nullable();
            $table->string('board_reg_no')->nullable();
            $table->string('board_roll_no')->nullable();
            $table->string('user_name')->nullable();
            $table->string('password')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('extra')->nullable();



            
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
        Schema::dropIfExists('students');
    }
}
