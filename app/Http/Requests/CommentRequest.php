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

    //article_idカラムはarticleテーブルのidカラムを参照
    //本文200文字以内
    public function rules()
    {
        return [
            'article_id' => 'required|exists:articles,id',
            'body' => 'required|max:200',
        ];
    }

    //エラーメッセージ翻訳
    public function attributes()
    {
        return [
            'body' => '本文',
        ];
    }
}