<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BbsEntry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bbs_entry', function (Blueprint $table) {
            $table->string('first_rank');//一枚目のハンドのランク
            $table->string('first_suit');//一枚目のハンドのスート
            $table->string('second_rank');//二枚目のハンドのランク
            $table->string('second_suit');//二枚目のハンドのスート
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
            $table->dropColumn('first_rank');//一枚目のハンドのランク
            $table->dropColumn('first_suit');//一枚目のハンドのスート
            $table->dropColumn('second_rank');//二枚目のハンドのランク
            $table->dropColumn('second_suit');//二枚目のハンドのスート
        });
    }
}
