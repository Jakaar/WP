<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpanelMailFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wpanel_mail_form', function (Blueprint $table) {
            $table->id();
            $table->string('display_name');
            $table->string('size');
            $table->text('details')->nullable();
            $table->string('type');
            $table->integer('order');
            $table->integer('group');
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
        Schema::dropIfExists('wpanel_mail_form');
    }
}
