<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesInstructor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('verification_doc_url')->nullable();
            $table->string('verification_no')->nullable();
            $table->string('resume_url')->nullable();
            $table->string('photo_url')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();

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
        Schema::dropIfExists('instructors');
    }
}
