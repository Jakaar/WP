<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpanelBoardMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wpanel_board_master', function (Blueprint $table) {
            $table->id();
            $table->string('board_name');
            $table->string('board_type');
            $table->integer('isComment');
            $table->integer('isReply');
            $table->integer('isRegister');
            $table->integer('isRating');
            $table->integer('isFile');
            $table->integer('isBoard');
            $table->integer('isCategory');
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
        Schema::dropIfExists('wpanel_board_master');
    }
}
