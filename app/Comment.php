<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; //リレーション用

class Comment extends Model
{
    protected $fillable = [
        'body','article_id'
    ];

    //投稿テーブルとのリレーション
    public function Article()
    {
        return $this->belongsTo('App\Article');
    }

    //ユーザーテーブルとのリレーション
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
