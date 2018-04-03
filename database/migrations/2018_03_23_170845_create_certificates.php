<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('certification_number');
            $table->string('rating')->nullable();
            $table->text('comment')->nullable();
            $table->datetime('valid_from');
            $table->integer('student_id')->unsigned();
            $table->integer('course_id')->unsigned();

            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('cascade');
            
            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
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
        Schema::dropIfExists('certificates');
    }
}
