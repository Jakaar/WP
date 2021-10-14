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
            $table->integer('isComment')->default(0);
            $table->integer('isCommentReply')->default(0);
            $table->integer('isRegister')->default(0);
            $table->integer('isRating')->default(0);
            $table->integer('isFile')->default(0);
            $table->integer('isBoard')->default(0);
            $table->integer('isCategory')->default(0);
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
