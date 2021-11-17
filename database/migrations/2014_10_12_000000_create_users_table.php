<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function ($table) {
            $table->increments('id');
            $table->string('google_id')->nullable();
            $table->integer('reporting_to')->nullable();
            $table->string('firstname', 100)->nullable();
            $table->string('lastname', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('password', 100)->nullable();
            $table->string('api_token', 60)->nullable();
            $table->string('remember_token', 255)->nullable();
            $table->enum('sex', ['','Male','Female'])->nullable();
            $table->date('dob')->nullable();
            $table->date('doj')->nullable();
            $table->string('designation', 50)->nullable();
            $table->string('mobile', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('street', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('district', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->integer('country')->nullable();
            $table->string('avatar', 500)->nullable();
            $table->string('web', 100)->nullable();
            $table->longText('urls')->nullable();
            $table->enum('status', ['New','Active','Suspended','Locked'])->nullable();
            $table->dateTime('email_verified_at')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('user_type', 50)->nullable();
            $table->string('upload_folder', 100)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
            $table->integer('subscribed')->nullable();
            $table->integer('isEnabled')->default(1);
            $table->string('reason', 500)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
