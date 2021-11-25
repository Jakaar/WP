<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainGalleryCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main__gallery__category', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('main_img');
            $table->text('description');
            $table->integer('is_enable');
            $table->integer('board_master_id');
            $table->integer('category_id');
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
        Schema::dropIfExists('main__gallery__category');
    }
}
