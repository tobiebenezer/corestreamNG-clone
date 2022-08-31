<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_ID');
            $table->unsignedBigInteger('comment_post_ID');
            $table->unsignedBigInteger('comment_author');
            $table->string('comment_author_email');
            $table->text('comment_content');
            $table->integer('comment_approved')->default(1);
            $table->string('comment_author_url');
            $table->string('comment_author_IP');
            $table->enum('comment_type',['comment','reply'])->default('comment');
            $table->string('comment_agent');
            $table->string('comment_parent');
            $table->foreign('comment_post_ID')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('comment_author')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('comments');
    }
};
