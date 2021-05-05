<!--未開発画面-->
@extends('app')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/handranges/commingsoon.css') }}">
@endsection

@section('title', 'comming soon')
	@include('nav')

	<body>
		<div class="jumbotron_all jumbotron-extend jumbotron-height">
			<div class="container text-center text-light">
				<h1>Comming Soon</h1>
				<button class="btn btn-dark back-btn mt-5" onclick="location.href='/range'">
					シチュエーション選択に戻る
				</button>
			</div>
		</div>
	</body>