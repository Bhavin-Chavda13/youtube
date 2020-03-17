<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable;
            $table->unsignedBigInteger('video_id')->nullable;
            $table->string('comments');
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')  
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('video_id')
            ->references('id')
            ->on('youtube')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
