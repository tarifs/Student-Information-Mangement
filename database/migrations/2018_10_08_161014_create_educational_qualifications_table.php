<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_qualifications', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('student_id')->unsigned();
            $table->string('ssc_board');
            $table->string('ssc_institute');
            $table->string('ssc_group');
            $table->string('ssc_year');
            $table->string('ssc_roll');
            $table->string('ssc_result');
            $table->string('hsc_board');
            $table->string('hsc_institute');
            $table->string('hsc_group');
            $table->string('hsc_year');
            $table->string('hsc_roll');
            $table->string('hsc_result');

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
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
        Schema::dropIfExists('educational_qualifications');
    }
}
