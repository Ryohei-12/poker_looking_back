<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Article::class, 'article');
    }
    
    //投稿一覧画面を表示
    function index(){
        $articles = Article::getArticles();

		return view("articles.index", ["articles" => $articles]);
	}
    
    //投稿作成ページのビューをarticles/sreateに設定
	function create(Request $request){
        return view('articles.create');
    }

    //新規投稿処理・user_idはuserテーブルのidを参照・投稿時に「新規投稿しました」と表示
     public function store(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all());
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect('articles/index')->with('poststatus', '新規投稿しました');
	}

    //編集ページ表示（指定した投稿のレコードを取得しておく）
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);    
    }

    //更新処理・更新時に「投稿を編集しました」と表示
    public function update(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all())->save();
        return redirect()->route('articles.index')->with('poststatus', '投稿を編集しました');
    }

    //記事削除処理・リダイレクト先は記事一覧
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('poststatus', '投稿を削除しました');
    }

    //詳細表示処理・詳細画面のURLに指定した記事のidを参照する
    public function show(Article $article)
    {
        $article=Article::getArticle($article->id);
        return view('articles.show', ['article' => $article]);
    } 
}