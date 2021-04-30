<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->unsigned()->unique();
            $table->string("title"); //タイトル
            $table->string('first_rank'); //一枚目のハンドのランク
            $table->string('first_suit'); //一枚目のハンドのスート
            $table->string('second_rank'); //二枚目のハンドのランク
            $table->string('second_suit'); //二枚目のハンドのスート
            $table->string("position"); //ポジション
            $table->decimal("stack", 6, 2)->unsigned(); //有効スタック
            $table->string("action_at_preflop"); //プリフロップのアクション
            $table->string('flop_1_rank')->nullable(); //フロップ1枚目ランク
            $table->string('flop_1_suit')->nullable(); //フロップ1枚目スート
            $table->string('flop_2_rank')->nullable(); //フロップ2枚目ランク
            $table->string('flop_2_suit')->nullable(); //フロップ2枚目スート
            $table->string('flop_3_rank')->nullable(); //フロップ3枚目ランク
            $table->string('flop_3_suit')->nullable(); //フロップ3枚目スート
            $table->string("action_at_flop")->nullable(); //フロップのアクション
            $table->string('turn_rank')->nullable(); //ターンランク
            $table->string('turn_suit')->nullable(); //ターンスート
            $table->string("action_at_turn")->nullable(); //ターンのアクション
            $table->string('river_rank')->nullable(); //リバーランク
            $table->string('river_suit')->nullable(); //リバースート
            $table->string("action_at_river")->nullable(); //リバーのアクション
            $table->string('opponent_first_rank')->nullable(); //相手のハンド一枚目のランク
            $table->string('opponent_first_suit')->nullable(); //相手のハンド一枚目のスート
            $table->string('opponent_second_rank')->nullable(); //相手のハンド二枚目のランク
            $table->string('opponent_second_suit')->nullable(); //相手のハンド二枚目のスート
            $table->decimal("result", 6, 2)->nullable(); //収支
            $table->string("body"); //コメント
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
        Schema::dropIfExists('articles');
    }
}
