<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    //コンストラクタ （このクラスが呼ばれると最初にこの処理をする）
    public function __construct()
    {
        // ログインしていなかったらログインページに遷移する（この処理を消すとログインしなくてもページを表示する）
        $this->middleware('auth');
    }

    //ユーザー編集ページ表示
    public function edit()
    {
        $user = Auth::user();

        return view('users.edit', ['user' => $user]);
    }

    //ユーザー更新
    public function update(UserRequest $request)
    {
        $user = User::find($request->id);
        if ($request->icon_images !=null) {
            $request->file('icon_images')->storeAs('public/user_images', $user->id . '.jpg');
            $user->icon_images = $user->id . '.jpg';
        }
        $user->name = $request->name;
        $user->email = $request->email;
        //dd($request->icon_image);
        $user->save();

        return redirect()->route('users.show', ['user' => $user])
            ->with('poststatus', 'プロフィールを編集しました');
    }

    //ユーザー詳細画面表示
    public function show(string $user)
    {
        $user = User::where('id', $user)->first();
        //作成時期降順に並び替え
        $articles = $user->articles->sortByDesc('created_at');
        
        return view('users.show', ['user' => $user, 'articles' => $articles,]);
    }
}
