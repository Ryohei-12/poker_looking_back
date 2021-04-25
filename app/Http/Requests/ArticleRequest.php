<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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

    //タイトル50文字以下
=======
    //記事のタイトル50文字以下
>>>>>>> Stashed changes
    //本文500文字以下
    public function rules()
    {
        return [
            //
            'title' => 'required|max:50',
            'body' => 'required|max:500',
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
            'title' => 'タイトル',
            'body' => '本文',
        ];
    }
}
