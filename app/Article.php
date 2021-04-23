<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; //リレーション用

class Article extends Model
{
    protected $fillable = [
        'title',
        'first_rank',
        'first_suit',
        'second_rank',
        'second_suit',
        'position',
        'stack',
        'action_at_preflop',
        'flop_1_rank',
        'flop_1_suit',
        'flop_2_rank',
        'flop_2_suit',
        'flop_3_rank',
        'flop_3_suit',
        'action_at_flop',
        'turn_rank',
        'turn_suit',
        'action_at_turn',
        'river_rank',
        'river_suit',
        'action_at_river',
        'opponent_first_rank',
        'opponent_first_suit',
        'opponent_second_rank',
        'opponent_second_suit',
        'result',
        'body',
    ];

    public static function getArticles()
    {
        return self::with(['user'])
        ->orderBy('created_at','desc')
        ->get();
    }

    public static function getArticle($id)
    {
        return self::with(['comment.user'])
        ->where('id',$id)
        ->first();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //コメントを記事に所有させる
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
