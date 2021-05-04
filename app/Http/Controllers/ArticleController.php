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
    
    //投稿一覧
    function index(){
        $articles = Article::getArticles();
		return view("articles.index", ["articles" => $articles]);
	}
    
    //投稿作成画面遷移
	function create(Request $request){
        return view('articles.create');
    }

    //投稿保存処理
     public function store(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all());
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect()->route('articles.index')->with('poststatus', '新規投稿しました');
	}

    //投稿編集画面遷移
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);    
    }

    //投稿更新処理
    public function update(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all())->save();
        return redirect()->route('articles.index')->with('poststatus', '投稿を編集しました');
    }

    //投稿削除処理
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('poststatus', '投稿を削除しました');
    }

    //詳細表示処理
    public function show(Article $article)
    {
        $article=Article::getArticle($article->id);
        return view('articles.show', ['article' => $article]);
    }
}