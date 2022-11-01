<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('username', 25);
            $table->string('password', 191);
            $table->string('email', 255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone', 20);
            $table->rememberToken();
            $table->timestamp('expired_password')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->timestamps();
            $table->tinyInteger('is_active');
            $table->integer('idvendor')->nullable();
            $table->integer('idrole')->nullable();
            $table->integer('bg_id')->nullable();
            $table->integer('role_id')->nullable();
            $table->integer('area_id')->nullable();
            $table->integer('approval_1')->nullable();
            $table->integer('approval_2')->nullable();
            $table->integer('approval_3')->nullable();
            $table->tinyInteger('retry')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
