<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveCotenstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_cotensts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->text('p_details')->nullable();
            $table->text('c_details')->nullable();
            $table->string('contest_no')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('price')->nullable();
            $table->string('prize_type')->nullable();
            $table->string('makers')->nullable();
            $table->date('end_date')->nullable();
            $table->text('g_image')->nullable();
            $table->string('f_image')->nullable();
            $table->string('title')->nullable();
            $table->string('title')->nullable();
            $table->text('detail')->nullable();
            $table->string('blog_image')->nullable();
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
        Schema::dropIfExists('live_cotensts');
    }
}
