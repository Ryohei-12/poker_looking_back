<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; //リレーション用

class Comment extends Model
{
    // 割り当て許可
    protected $fillable = [
        'body','article_id'
    ];

    //記事とのリレーション
    public function Article()
    {
        return $this->belongsTo('App\Article');
    }

    //ユーザーとのリレーション
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
