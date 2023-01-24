<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsPostCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_post_categories', function (Blueprint $table) {
            $table->integer('post_categories_id')->unsigned();
            $table->foreign('post_categories_id')->references('id')
            ->on('post_categories')->onDelete('cascade');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')
            ->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_post_categories');
    }
}
