<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
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
            $table->string('status')->default(0);
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
        Schema::dropIfExists('questions');
    }
}
