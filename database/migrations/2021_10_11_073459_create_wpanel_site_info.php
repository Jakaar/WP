<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpanelSiteInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wpanel_site_info', function (Blueprint $table) {
            $table->string('company_name');
            $table->string('site_name');
            $table->string('fax');
            $table->string('company_register_number');
            $table->string('phone_number');
            $table->string('address');
            $table->string('email');
            $table->string('site_copyright');
            $table->string('logo')->nullable();
            $table->string('terms_of_condition');
            $table->string('privacy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wpanel_site_info');
    }
}
