<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
<<<<<<< Updated upstream
    //対応するユーザーをuserテーブルからひとつ見つける・そのユーザーidと紐づく投稿のみ作成時間降順で表示
=======
    //DBからログイン中のユーザー情報を取り出す→記事一覧表示
    //ユーザーページに表示（作成時期降順）
>>>>>>> Stashed changes
    public function show(string $name)
    {
        $user = User::where('name', $name)->first();
        $articles = $user->articles->sortByDesc('created_at');

        return view('users.show', ['user' => $user, 'articles' => $articles,]);
    }
}
