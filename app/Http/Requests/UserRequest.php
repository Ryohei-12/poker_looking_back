<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
    public function rules()
    {
        return [
            'icon_images' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required', 'string', 'min:3', 'max:16', 'unique:users', //3〜16文字のユニークユーザー
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users', //メールアドレスの形でユニーク
        ];
    }

    //エラーメッセージ翻訳
    public function attributes()
    {
        return [
            'icon_images' => 'アイコン',
            'name' => 'ユーザー名',
            'email' => 'メールアドレス'
        ];
    }
}
