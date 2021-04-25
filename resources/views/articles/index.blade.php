<!--記事一覧画面-->
@extends('app')

@section('title', 'hand review forum')

@section('content')
	@include('nav')
<body>
	<div class="jumbotron_all jumbotron-extend">
		<div class="container text-light">
			<div class="container text-light">	
				<h1 class="text-center pt-3">Hand Forum</h1>
				<button class="btn btn-dark px-0"
				style="padding-bottom: 32px; font-size:15px; width:180px; height: 35px; margin:10px; background: linear-gradient(-135deg, #000000, #009966)" 
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

					<!--投稿がなければ「投稿がありません」と表示-->
					@if(count($articles) < 1)
					<p>投稿がありません</p>
					@endif
				</div>
			</div>
		</div>
	</div>
</body>
@endsection