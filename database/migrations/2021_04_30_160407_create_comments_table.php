<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('id')->autoIncrement()->unsigned();
            //投稿テーブルとの外部キー制約
            $table->integer('article_id')->unsigned()->nullable()->default(NULL);
            $table->foreign('article_id')
                    ->references('id')
                    ->on('articles')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            //ユーザーテーブルとの外部キー制約
            $table->integer('user_id')->unsigned()->nullable()->default(NULL);
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->text('body')->nullable(false);
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
}
