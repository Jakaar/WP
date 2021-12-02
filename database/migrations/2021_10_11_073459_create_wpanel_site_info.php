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
            $table->text('terms_of_condition')->nullable();
            $table->text('privacy')->nullable();
            $table->text('terms_of_condition_name_url')->nullable();
            $table->text('privacy_name_url')->nullable();
            $table->string('personal_information_manager');
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
