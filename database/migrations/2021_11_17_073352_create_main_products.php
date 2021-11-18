<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('sku')->unique();
            $table->text('name');
            $table->integer('showing_order');
            $table->integer('is_status');
            $table->integer('is_hit');
            $table->integer('is_suggest');
            $table->integer('is_new');
            $table->integer('is_trend');
            $table->integer('is_sale');
            $table->text('manufacturer');
            $table->text('created_county');
            $table->text('brand_name');
            $table->text('model_name');
            $table->bigInteger('price');
            $table->string('description');
            $table->string('main_img');
            $table->string('other_photos');
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
        Schema::dropIfExists('main_products');
    }
}
