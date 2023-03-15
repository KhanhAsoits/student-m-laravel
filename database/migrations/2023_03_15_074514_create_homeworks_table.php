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
        Schema::create('homeworks', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("desc");
            $table->integer("state");
            $table->timestamp("deadline");
            $table->timestamp("start_at");
            $table->bigInteger("teacher_id");
            $table->bigInteger("class_id");
            $table->timestamps();
            $table->foreign("teacher_id")->references("id")->on("teachers");
            $table->foreign("class_id")->references("id")->on("classes");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homeworks');
    }
};
