<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('depi_retweet_count')->default(0);
            $table->integer('depi_reply_count')->default(0);
            $table->integer('depi_like_count')->default(0);
            $table->integer('your_retweet_count')->default(0);
            $table->integer('your_reply_count')->default(0);
            $table->integer('your_like_count')->default(0);
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
        Schema::dropIfExists('stats');
    }
}
