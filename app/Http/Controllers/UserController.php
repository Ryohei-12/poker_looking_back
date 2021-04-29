<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //ユーザー詳細画面表示
    public function show(string $name)
    {
        $user = User::where('name', $name)->first();
        //作成時期降順に並び替え
        $articles = $user->articles->sortByDesc('created_at');

        return view('users.show', ['user' => $user, 'articles' => $articles,]);
    }
}
