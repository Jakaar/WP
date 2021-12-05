<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormBuilded extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_builded', function (Blueprint $table) {
            $table->id();
            $table->text('form_name');
            $table->integer('is_status');
            $table->integer('receive_email');
            $table->integer('board_master_id');
            $table->integer('category_id');
            $table->json('data');
            $table->integer('isEnabled');
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
        Schema::dropIfExists('form_builded');
    }
}
