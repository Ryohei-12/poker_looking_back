<!--記事一覧画面-->
@extends('app')

@section('title', 'hand review forum')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/articles/index.css') }}">
@endsection

@section('content')
	@include('nav')
<body>
	<div class="jumbotron jumbotron-extend">
		<div class="container text-light">
			<div class="container text-light">	
				<h1 class="text-center pt-3">Hand Forum</h1>
				<button class="btn btn-dark px-0 btn-return"
				onclick="location.href='/main'">
					メインページに戻る
				</button>

				<!--新規投稿・削除した際にコントローラーで指定したメッセージを表示する-->
				@if (session('poststatus'))
					<div class="alert alert-success mt-4 mb-4">
						{{ session('poststatus') }}
					</div>
				@endif

				<!--投稿内容のカードを連続で表示-->
				<div class="container pb-5">
					@foreach ($articles as $article)
				
					@include('articles.card')

					@endforeach

					@if(count($articles) < 1)
					<h3 class="text-center under">投稿がありません</h3>
					@endif
				</div>
			</div>
		</div>
	</div>
</body>
@endsection