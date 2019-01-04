<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAudioBookNarratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audio_book_narrators', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('audio_book_id');
            $table->unsignedInteger('narrator_id');
            $table->timestamps();
            $table->foreign('audio_book_id')->references('id')->on('audio_books');
            $table->foreign('narrator_id')->references('id')->on('narrators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audio_book_narrators');
    }
}
