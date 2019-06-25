<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentGPAsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_g_p_as', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->string('semester_1_gpa')->nullable();
            $table->string('semester_2_gpa')->nullable();
            $table->string('semester_3_gpa')->nullable();
            $table->string('semester_4_gpa')->nullable();
            $table->string('semester_5_gpa')->nullable();
            $table->string('semester_6_gpa')->nullable();
            $table->string('semester_7_gpa')->nullable();
            $table->string('semester_8_gpa')->nullable();
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
        Schema::dropIfExists('student_g_p_as');
    }
}
