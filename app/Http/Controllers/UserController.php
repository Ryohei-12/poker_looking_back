<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //DBからログイン中のユーザー情報を取り出す→記事一覧表示
    //ユーザーページに表示（作成時期降順）
    public function show(string $name)
    {
        $user = User::where('name', $name)->first();
        $articles = $user->articles->sortByDesc('created_at');

        return view('users.show', ['user' => $user, 'articles' => $articles,]);
    }
}
