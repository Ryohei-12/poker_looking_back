<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //ユーザー情報を取り出し、作成時期降順に並び替え
    public function show(string $name)
    {
        $user = User::where('name', $name)->first();
        $articles = $user->articles->sortByDesc('created_at');

        return view('users.show', ['user' => $user, 'articles' => $articles,]);
    }
}
