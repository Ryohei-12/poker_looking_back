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
    
    function index(){
		//@TODO 投稿一覧画面を表示
        $articles = Article::all()->sortByDesc('created_at');
		return view("articles.index", [
			"articles" => $articles
		]);
	}
    
    //投稿処理を行う
	function create(Request $request){
        return view('articles.create');
    }

    //新規作成処理
     public function store(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all());
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect('articles.index');
	}

    //編集処理
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);    
    }

    //更新処理
    public function update(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all())->save();
        return redirect()->route('articles.index');
    }

    //記事削除処理
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }

    //詳細表示処理
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    } 
}