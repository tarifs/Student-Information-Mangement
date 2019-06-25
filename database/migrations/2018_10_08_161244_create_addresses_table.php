<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('student_id')->unsigned();
            $table->string('present_village');
            $table->string('present_post_office')->nullable();
            $table->string('present_post_code')->nullable();
            $table->string('present_upazila');
            $table->string('present_district');
            $table->string('permanent_village');
            $table->string('permanent_post_office')->nullable();
            $table->string('permanent_post_code')->nullable();
            $table->string('permanent_upazila');
            $table->string('permanent_district');

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
        Schema::dropIfExists('addresses');
    }
}
