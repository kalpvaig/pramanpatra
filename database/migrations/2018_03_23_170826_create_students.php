<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudents extends Migration
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
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('address')->nullable();
            $table->string('fathersname')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('verification_doc_url')->nullable();
            $table->string('verification_no')->nullable();
            $table->string('photo_url')->nullable();
            $table->date('start_date');
            $table->date('end_date');

            $table->string('social1_name')->nullable();
            $table->string('social1_url')->nullable();
            $table->string('social2_name')->nullable();
            $table->string('social2_url')->nullable();
            $table->string('social3_name')->nullable();
            $table->string('social3_url')->nullable();

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
