<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientFormData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_form_data', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('email')->nullable();
            $table->timestamp('submited_at');
            $table->integer('form_id');
            $table->integer('isEnabled');
            $table->string('is_active')->nullable();
            $table->longtext('answer')->nullable();
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
        Schema::dropIfExists('client_form_data');
    }
}
