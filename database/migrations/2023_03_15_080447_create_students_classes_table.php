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
        Schema::create('students_classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("class_id");

            $table->unsignedBigInteger("student_id");

            $table->foreign("class_id")->references("id")->on("classes");
            $table->foreign("student_id")->references("id")->on("students");
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
        Schema::dropIfExists('students_clases');
    }
};
