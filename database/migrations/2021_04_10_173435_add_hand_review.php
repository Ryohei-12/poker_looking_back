<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHandReview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bbs_entry', function (Blueprint $table) {
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
            $table->dropColumn("hand"); //ハンド
            $table->dropColumn("position"); //ポジション
            $table->dropColumn("stack"); //有効スタック
            $table->dropColumn("flop"); //フロップ
            $table->dropColumn("action_at_flop"); //フロップのアクション
            $table->dropColumn("turn"); //ターン
            $table->dropColumn("action_at_turn"); //ターンのアクション
            $table->dropColumn("river"); //リバー
            $table->dropColumn("action_at_river"); //リバーのアクション
            $table->dropColumn("hand_of_opponent"); //ショーダウン
            $table->dropColumn("result"); //収支
        });
    }
}
