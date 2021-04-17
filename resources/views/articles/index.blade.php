@extends('app')

@section('title', '記事一覧')

<body>

	<button onclick="location.href='/main'">メインページに戻る</button>

	<h2>記事一覧</h2>

	@section('content')
		@include('nav')
  <div class="container">
	@foreach ($articles as $article)
	
	@include('articles.card')

	@endforeach
	@if(count($articles) < 1)
	<p>投稿がありません</p>
	@endif
  </div>
@endsection
</body>
</html>