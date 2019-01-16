<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->longText('post');
            $table->integer('user_id')->unsigned();
            $table->integer('theme_id')->unsigned();
            $table->timestamps();
        });
            Schema::table('posts', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('theme_id')->references('id')->on('themes')->onDelete('cascade');
            
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
     function down()
    {
        Schema::dropIfExists('posts');
    }
}
