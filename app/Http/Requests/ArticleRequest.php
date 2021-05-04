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

    //記事のタイトル50文字以下
    //本文500文字以下
    //スタックと収支は数値
    //その他必須項目のバリデーション
    public function rules()
    {
        return [
            'title' => 'required|max:50',
            'body' => 'required|max:500',
            'stack' => 'required|numeric',
            'result' => 'numeric',
            'first_rank' => 'required|in:A,K,Q,J,T,9,8,7,6,5,4,3,2',
            'first_suit' => 'required|in:s,d,h,c',
            'second_rank' => 'required|in:A,K,Q,J,T,9,8,7,6,5,4,3,2',
            'second_suit' => 'required|in:s,d,h,c',
            'position' => 'required',
            'action_at_preflop' => 'required',
        ];
    }

    //エラーメッセージ翻訳
    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'body' => 'コメント',
            'stack' => 'スタック',
            'result' => '収支',
            'first_rank' => 'スターティングハンド',
            'first_suit' => 'スターティングハンド',
            'second_rank' => 'スターティングハンド',
            'second_suit' => 'スターティングハンド',
            'position' => 'ポジション',
            'action_at_preflop' => 'プリフロップのアクション',
        ];
    }
}
