<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthLoginAttemp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_login_attemp', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('status');
            $table->datetime('attempted_date');
            $table->string('ip');
            $table->string('password')->nullable();
            $table->string('log_file');
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
        Schema::dropIfExists('auth_login_attemp');
    }
}
