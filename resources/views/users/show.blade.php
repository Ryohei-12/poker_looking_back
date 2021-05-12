<!--ユーザー詳細画面-->
@extends('app')

<!--タイトルにはユーザー名を表示-->
@section('title', $user->name)

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/users/show.css') }}">
@endsection

@section('content')
  @include('nav')
  
<div class="jumbotron jumbotron-extend">
	<div class="container">
		<div class="container text-light">
			<!--プロフィール編集した際にコントローラーで指定したメッセージを表示する-->
			@if (session('poststatus'))
				<div class="alert alert-success mt-4 mb-4">
					{{ session('poststatus') }}
				</div>
			@endif
			<div class="card card-style">
				<div class="card-body">
					<div class="d-flex flex-row align-items-center">
					@if ($user->icon_images)
        				<p>
    						<img class="round-img" src="{{ asset('storage/user_images/' . $user->icon_images) }}"/>
        				</p>
        			@else
						<i class="fas fa-user-circle fa-3x mr-1"></i>
    				@endif
						<h2 class="h5 card-title m-0 ml-1">
							{{ $user->name }}の投稿
						</h2>
						@if ($user->id == Auth::user()->id)
							<a class="d-flex align-items-center ml-auto" href="{{ route("users.edit", ['user' => $user->id]) }}">
								<i class="fa fa-cog fa-2x text-light"></i> 
							</a>
						@endif
					</div>
				</div>
			</div>
			@foreach($articles as $article)
			@include('articles.card')
			@endforeach
			@if(count($articles) < 1)
				<h3 class="text-center mt-5 under">まだ投稿がありません</h3>
			@endif

		</div>
	</div>
</div>
@endsection