<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->text('firstname');
            $table->text('lastname');
            $table->text('hall');
            $table->text('room_no');
            $table->text('address');
            $table->text('denomination');
            $table->text('parent_no');
            $table->text('course');
            $table->string('matric_no');
            $table->text('level');
            $table->string('password');
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
