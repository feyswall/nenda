<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('gender');
            $table->string('check_number')->unique();
            $table->string('present_station');
            $table->string('vote_code');
            $table->string('sub_vote');
            $table->string('academic');
            $table->string('duty_post');
            $table->string('substantive_post');
            $table->string('fapointment');
            $table->string('papointment');
            $table->string('salary');
            $table->string('period');
            $table->string('birth');
            $table->text('comment');
            $table->unsignedBigInteger('lecture_id');
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
        Schema::dropIfExists('profiles');
    }
}
