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
            $table->date('lieutenant_at')->nullable();
            $table->date('captain_at')->nullable();
            $table->date('major_at')->nullable();
            $table->date('colonel_at')->nullable();
            $table->date('general_at')->nullable();
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
