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

    public function Article()
    {
        return $this->belongsTo('App\Article');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //public static function getArticle($id)
    //{
    //    return self::with(['article'])
    //    ->where('id',$id)
    //    ->first();
    //}
}
