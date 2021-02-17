<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TerribleAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terrible_answers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('terrible_question_id')->unsigned();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('terrible_question_id')->references('id')->on('terrible_questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('terrible_answers', function (Blueprint $table) {
            $table->dropForeign('terrible_answers_terrible_question_id_foreign');
        });

        Schema::dropIfExists('terrible_answers');
    }
}
