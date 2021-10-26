<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpanelPageManage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wpanel_page_manage', function (Blueprint $table) {
            $table->id();
            $table->string('menu_group');
            $table->integer('isEnable')->nullable();
            $table->string('priority');
            $table->string('page_name');
            $table->string('connection');
            $table->string('page_url');
            $table->string('page_code');
            $table->text('page_content');
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
        Schema::dropIfExists('wpanel_page_manage');
    }
}
