@extends('app')

@section('title', $user->name)

@section('content')
  @include('nav')
<div class="jumbotron_all jumbotron-extend" style="height: 100vh;">
	<div class="container text-light">
		<div class="container">
			<div class="card mt-3" style="background: linear-gradient(-135deg, #000000, #009966);">
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