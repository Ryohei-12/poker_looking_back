<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
<<<<<<< Updated upstream

    //article_idカラムはarticleテーブルのidカラムを参照
    //本文200文字以内
=======
    //記事のIDはarticlesテーブルのidカラムから持ってくる
    //本文200文字以下
>>>>>>> Stashed changes
    public function rules()
    {
        return [
            'article_id' => 'required|exists:articles,id',
            'body' => 'required|max:200',
        ];
    }

<<<<<<< Updated upstream
    //エラーメッセージ翻訳
=======
    //エラー内容の翻訳
>>>>>>> Stashed changes
    public function attributes()
    {
        return [
            'body' => '本文',
        ];
    }
}

//ここでarticle_idを取得する設定してみる？