<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_news', function (Blueprint $table) {
            $table->id();
            $table->string('class');
            $table->string('class_id')->nullable();
            $table->unsignedBigInteger('session_id');
            $table->date('date')->nullable();
            $table->time('timeStart')->nullable();
            $table->time('timeEnd')->nullable();
            $table->string('teacher_id')->nullable();
            $table->string('category')->nullable();
            $table->string('roomNo')->nullable();
            $table->string('part')->nullable();
            $table->string('remark')->nullable();
            $table->string('level')->nullable();
            $table->string('shift')->nullable();
            $table->string('subject')->nullable();
            $table->string('group')->nullable();
            $table->longText('details')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('class_news');
    }
}
