<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("student_id");

            $table->unsignedBigInteger("teacher_id");


            $table->foreign("student_id")->references("id")->on("students");
            $table->foreign("teacher_id")->references("id")->on("teachers");
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
        Schema::dropIfExists('students_teachers');
    }
};
