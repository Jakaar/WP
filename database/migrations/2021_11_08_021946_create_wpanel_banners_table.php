<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpanelBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wpanel_banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('group_name');
            $table->string('code');
            $table->string('image')->nullable();
            $table->text('banner_content')->nullable();
            $table->string('design_method');
            $table->integer('priority');
            $table->string('link_address');
            $table->string('daterange');
            $table->string('slug');
            $table->string('isEnabled');
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
        Schema::dropIfExists('wpanel_banners');
    }
}
