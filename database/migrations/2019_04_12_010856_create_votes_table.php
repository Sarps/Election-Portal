<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('voter_id');
            $table->unsignedBigInteger('nominee_id');
            $table->smallInteger('value')->default(0);
            $table->timestamps();

            $table->foreign('voter_id')->references('id')->on('voters');
            $table->foreign('nominee_id')->references('id')->on('nominees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
