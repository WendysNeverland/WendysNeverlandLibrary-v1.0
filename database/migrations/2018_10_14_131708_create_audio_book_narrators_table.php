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
            $table->unsignedInteger('audioId');
            $table->unsignedInteger('narratorId');
            $table->timestamps();
            $table->foreign('audioId')->references('id')->on('audio_books');
            $table->foreign('narratorId')->references('id')->on('narrators');
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
