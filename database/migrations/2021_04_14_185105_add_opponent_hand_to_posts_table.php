<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOpponentHandToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bbs_entry', function (Blueprint $table) {
            $table->string('opponent_first_rank');//相手のハンド一枚目のランク
            $table->string('opponent_first_suit');//相手のハンド一枚目のスート
            $table->string('opponent_second_rank');//相手のハンド二枚目のランク
            $table->string('opponent_second_suit');//相手のハンド二枚目のスート
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
            $table->dropColumn('opponent_first_rank');//相手のハンド一枚目のランク
            $table->dropColumn('opponent_first_suit');//相手のハンド一枚目のスート
            $table->dropColumn('opponent_second_rank');//相手のハンド二枚目のランク
            $table->dropColumn('opponent_second_suit');//相手のハンド二枚目のスート
        });
    }
}
