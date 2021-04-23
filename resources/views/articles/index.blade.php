@extends('app')

@section('title', '記事一覧')

@section('content')
	@include('nav')

	<h2>記事一覧</h2>
	<button onclick="location.href='/main'">メインページに戻る</button>

	@if (session('poststatus'))
    <div class="alert alert-success mt-4 mb-4">
        {{ session('poststatus') }}
    </div>
	@endif

  <div class="container">
	@foreach ($articles as $article)
	
	@include('articles.card')

	@endforeach
	@if(count($articles) < 1)
	<p>投稿がありません</p>
	@endif
  </div>
@endsection