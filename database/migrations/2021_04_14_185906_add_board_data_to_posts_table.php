<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBoardDataToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bbs_entry', function (Blueprint $table) {
            $table->string('flop_1_rank');//フロップ1枚目ランク
            $table->string('flop_1_suit');//フロップ1枚目スート
            $table->string('flop_2_rank');//フロップ2枚目ランク
            $table->string('flop_2_suit');//フロップ2枚目スート
            $table->string('flop_3_rank');//フロップ3枚目ランク
            $table->string('flop_3_suit');//フロップ3枚目スート
            $table->string('turn_rank');//ターンランク
            $table->string('turn_suit');//ターンスート
            $table->string('river_rank');//リバーランク
            $table->string('river_suit');//リバースート
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
            $table->dropColumn('flop_1_rank');//フロップ1枚目ランク
            $table->dropColumn('flop_1_suit');//フロップ1枚目スート
            $table->dropColumn('flop_2_rank');//フロップ2枚目ランク
            $table->dropColumn('flop_2_suit');//フロップ2枚目スート
            $table->dropColumn('flop_3_rank');//フロップ3枚目ランク
            $table->dropColumn('flop_3_suit');//フロップ3枚目スート
            $table->dropColumn('turn_rank');//ターンランク
            $table->dropColumn('turn_suit');//ターンスート
            $table->dropColumn('river_rank');//リバーランク
            $table->dropColumn('river_suit');//リバースート
        });
    }
}
