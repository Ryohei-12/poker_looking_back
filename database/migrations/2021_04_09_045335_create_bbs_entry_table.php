<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbsEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbs_entry', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title");	//タイトル
            $table->string("author");	//投稿者名
            $table->string("body");	//本文
            $table->string("hand"); //ハンド
            $table->string("position"); //ポジション
            $table->string("stack"); //有効スタック
            $table->string("flop"); //フロップ
            $table->string("action_at_flop"); //フロップのアクション
            $table->string("turn"); //ターン
            $table->string("action_at_turn"); //ターンのアクション
            $table->string("river"); //リバー
            $table->string("action_at_river"); //リバーのアクション
            $table->string("hand_of_opponent"); //ショーダウン
            $table->string("result"); //収支
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
        Schema::dropIfExists('bbs_entry');
    }
}
