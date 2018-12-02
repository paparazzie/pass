<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShortdistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_distances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->text('name');
            $table->text('matric_no');
            $table->text('course');
            $table->text('level');
            $table->text('hall');
            $table->text('destination');
            $table->text('guardian_name');
            $table->text('guardian_phone');
            $table->text('date_of_leave');
            $table->text('date_of_return');
            $table->text('address');
            $table->text('purpose');
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
        Schema::dropIfExists('short_distances');
    }
}
