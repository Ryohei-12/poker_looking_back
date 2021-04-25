<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use App\User;
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{
<<<<<<< Updated upstream
    //コメント投稿・user_idはuserテーブルのidカラムを参照・リダイレクト先はコメントした投稿の詳細→メッセージ「コメントをしました」を表示
=======
    //コメント新規作成
    //ユーザー情報はuserテーブルとリレーション
    //コメントをした投稿にリダイレクトする→「コメントをしました」とポップアップ出す
>>>>>>> Stashed changes
    public function store(CommentRequest $request,Comment $comment)
    {
        $comment->fill($request->all());
        $comment->user_id = $request->user()->id;
        $comment->save();
        return redirect()->route('articles.show', ['article' => $comment->article_id,])->with('commentstatus','コメントをしました');
    }

<<<<<<< Updated upstream
    //コメント削除→メッセージ「コメントを削除しました」を表示
=======
    //コメント削除処理→「コメントを削除しました」とポップアップ出す
>>>>>>> Stashed changes
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('articles.show', ['article' => $comment->article_id,])->with('commentstatus','コメントを削除しました');
    }
}
