<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use App\User;
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{
    //コメント投稿処理
    public function store(CommentRequest $request,Comment $comment)
    {
        $comment->fill($request->all());
        $comment->user_id = $request->user()->id;
        $comment->save();
        return redirect()->route('articles.show', ['article' => $comment->article_id,])->with('commentstatus','コメントをしました');
    }

    //コメント削除処理
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('articles.show', ['article' => $comment->article_id,])->with('commentstatus','コメントを削除しました');
    }
}
