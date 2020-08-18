<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLectureFillObjectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture_fill_objectives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lecture_objectives_id')->nullable();
            $table->string('rate')->nullable();

            $table->unsignedBigInteger('lecture_id')->nullable();
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
        Schema::dropIfExists('lecture_fill_objectives');
    }
}
