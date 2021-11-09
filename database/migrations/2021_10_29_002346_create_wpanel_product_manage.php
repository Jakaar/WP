<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpanelProductManage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wpanel_product_manage', function (Blueprint $table) {
            $table->id();
            $table->string('product_classification')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_code');
            $table->string('product_price')->nullable();
            $table->string('product_informationlist')->nullable();
            $table->string('product_informationreduction');
            $table->string('product_informationdetail')->nullable();
            $table->string('product_informationenlargement')->nullable();
            $table->string('product_desc')->nullable();
            $table->string('product_detail')->nullable();
            $table->text('product_image')->nullable();
            $table->string('isEnable')->nullable();
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
        Schema::dropIfExists('wpanel_product_manage');
    }
}
