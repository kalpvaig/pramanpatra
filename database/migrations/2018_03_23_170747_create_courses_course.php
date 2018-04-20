<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('duration_hours')->nullable();
            $table->integer('duration_days')->nullable();
            $table->tinyinteger('duration_type')->default(0);
            $table->integer('instructor_id')->unsigned();
            $table->string('venue')->nullable();

            $table->foreign('instructor_id')
                ->references('id')
                ->on('instructors')
                ->onDelete('cascade');


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
        Schema::dropIfExists('courses');
    }
}
