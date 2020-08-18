<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLectureObjectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture_objectives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('objective');
            $table->text('performance_targets');
            $table->text('performance_criteria');
            $table->text('agreed_resource');


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
        Schema::dropIfExists('lecture_objectives');
    }
}
