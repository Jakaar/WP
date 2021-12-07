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
            $table->string('company_name')->nullable();
            $table->string('site_name')->nullable();
            $table->string('fax')->nullable();
            $table->string('company_register_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('site_copyright')->nullable();
            $table->string('logo')->nullable();
            $table->text('terms_of_condition')->nullable();
            $table->text('privacy')->nullable();
            $table->text('terms_of_condition_name_url')->nullable();
            $table->text('privacy_name_url')->nullable();
            $table->text('personal_information_manager')->nullable();
            $table->text('location')->nullable();
            $table->text('recieve_promotional_information')->nullable();
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
