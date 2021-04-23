@extends('app')

@section('title', $user->name)

@section('content')
  @include('nav')
  <div class="container">
    <div class="card mt-3">
    	<div class="card-body">
			<div class="d-flex flex-row">
				<i class="fab fa-bitcoin fa-3x mr-1"></i>
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
@endsection