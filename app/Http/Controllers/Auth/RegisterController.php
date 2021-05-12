<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Storage;
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

    //新規登録のバリデーション
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'icon_images' => ['file', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'name' => ['required', 'string', 'min:3', 'max:16', 'unique:users'], //3〜16文字のユニークユーザー
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], //メールアドレスの形でユニーク
            'password' => ['required', 'string','regex:/^[a-zA-Z0-9]+$/', 'min:8', 'confirmed'], //英数字8文字以上
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    
    //ユーザー新規登録処理
    protected function create(array $data)
    {
        if (request()->file('icon_images') !=null) {
            $icon = request()->file('icon_images');
            // s3のicon_imagesファイルに追加
            $path = Storage::disk('s3')->put('icon_images',$icon, 'public');
        }
        else{
            $icon_images = null;
        }

        return User::create([
            // パスを、ユーザのicon_imagesカラムに保存
            'icon_images' => $path,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
