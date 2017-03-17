<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('标题');
            $table->string('author')->comment('作者');
            $table->integer('uid')->comment('所属用户');
            $table->string('subject')->comment('主题');
            $table->string('content')->comment('内容');
            $table->string('picture')->comment('图片');
            $table->string('label')->comment('标签');
            $table->integer('browse')->comment('浏览量');
            $table->integer('comment')->comment('评论量');
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
        Schema::dropIfExists('blogs');
    }
}
