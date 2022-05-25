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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique()->nullable();
            $table->string('wallet_id');
            $table->string('image')->nullable();
            $table->string('provider');
            $table->string('provider_id');
            $table->string('provider_token')->nullable();
            $table->string('provider_token_secret')->nullable();
            $table->string('discord_id')->nullable();
            $table->string('discord_token')->nullable();
            $table->string('discord_refresh_token')->nullable();
            $table->date('following_at')->nullable();
            $table->date('join_at')->nullable();
            $table->date('tweet_at')->nullable();
            $table->string('tweet')->nullable();
            $table->unsignedBigInteger('referrer_id')->nullable();
            $table->string('password')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
