<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_contests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('title')->nullable();
            $table->text('p_details')->nullable();
            $table->text('c_details')->nullable();
            $table->string('contest_no')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('price')->nullable();
            $table->string('prize_type')->nullable();
            $table->string('makers')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->text('g_image')->nullable();
            $table->string('f_image')->nullable();
            $table->string('question')->nullable();
            $table->string('ans_a')->nullable();
            $table->string('ans_b')->nullable();
            $table->string('ans_c')->nullable();
            $table->string('ans_d')->nullable();
            $table->string('ans_ai')->nullable();
            $table->string('ans_bi')->nullable();
            $table->string('ans_ci')->nullable();
            $table->string('ans_di')->nullable();
            $table->string('correct_a')->nullable();
            $table->string('mile')->nullable();
            $table->string('speed')->nullable();
            $table->string('power')->nullable();
            $table->string('displacement')->nullable();
            $table->string('bhp')->nullable();
            $table->string('year')->nullable();
            $table->string('status')->nullable();
            $table->string('action')->nullable();
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
        Schema::dropIfExists('live_contests');
    }
}
