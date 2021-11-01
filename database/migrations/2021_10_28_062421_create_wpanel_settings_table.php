<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpanelSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wpanel_settings', function (Blueprint $table) {
            $table->id();
            $table->string('display_name');
            $table->string('key');
            $table->text('value')->nullable();
            $table->text('details')->nullable();
            $table->string('type');
            $table->integer('order');
            $table->string('group');
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
        Schema::dropIfExists('wpanel_settings');
    }
}
