<!--ユーザー詳細画面-->
@extends('app')

<!--タイトルにはユーザー名を表示-->
@section('title', $user->name)

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/users/show.css') }}">
@endsection

@section('content')
  @include('nav')
  
<div class="jumbotron_all jumbotron-extend">
	<div class="container">
		<div class="container pt-3 text-light">
			<div class="card card-style">
				<div class="card-body">
					<div class="d-flex flex-row">
						<i class="fas fa-user-circle fa-3x mr-1"></i>
						<h2 class="h5 card-title m-0">
							{{ $user->name }}の投稿
						</h2>
					</div>
				</div>
			</div>
			@foreach($articles as $article)
			@include('articles.card')
			@endforeach
		</div>
	</div>
</div>
@endsection