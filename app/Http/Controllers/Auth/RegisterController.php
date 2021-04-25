<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //認証後メインページへ遷移
    protected $redirectTo = '/main';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //条件：ここで作成する配列を変数ゲストに代入する
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
<<<<<<< Updated upstream

    //新規登録のバリデーション
=======
    //ユーザー登録内容のバリデーション
>>>>>>> Stashed changes
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'alpha_num', 'min:3', 'max:16', 'unique:users'], //英数字3〜16文字のユニークユーザー
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], //メールアドレスの形でユニーク
            'password' => ['required', 'string','alpha_num', 'min:8', 'confirmed'], //英数字8文字以上
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
<<<<<<< Updated upstream

    //ユーザー新規登録の内容をUserテーブルに送る
=======
    //新規ユーザー登録
>>>>>>> Stashed changes
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
