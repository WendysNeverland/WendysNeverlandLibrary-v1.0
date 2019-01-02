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
            $table->unsignedInteger('userLibrary_id');
            $table->date('checkout');
            $table->date('checkin');
            $table->timestamps();
            $table->foreign('userLibrary_id')->references('id')->on('user_libraries');
        });
    }
//hello
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
