<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserDataToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bbs_entry', function (Blueprint $table) {
            $table->bigInteger('user_id'); //ユーザーIDのカラム追加
            $table->foreign('user_id')->references('id')->on('users'); //登録されたユーザーIDを参照
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bbs_entry', function (Blueprint $table) {
            //
        });
    }
}
