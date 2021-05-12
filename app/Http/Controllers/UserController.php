<?php

namespace App\Http\Controllers;

use App\User;
use Storage;
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
            $icon = request()->file('icon_images');
            // s3のicon_imagesファイルに追加
            $path = Storage::disk('s3')->put('icon_images',$icon, 'public');
        }
        // パスを、ユーザのicon_imagesカラムに保存
        $user->icon_images = $path;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $validated = $request->validated();

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
