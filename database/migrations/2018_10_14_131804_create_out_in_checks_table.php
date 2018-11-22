<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutInChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_in_checks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('userLibraryId');
            $table->date('checkout');
            $table->date('checkin');
            $table->timestamps();
            $table->foreign('userLibraryId')->references('id')->on('user_libraries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('out_in_checks');
    }
}
