<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //ログイン後メインページへ遷移
    protected $redirectTo = '/main';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
<<<<<<< Updated upstream

    //コンストラクタ・ログアウトしたユーザー以外ゲスト
=======
    //条件：ログアウトはログイン中のゲストから除く
>>>>>>> Stashed changes
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
