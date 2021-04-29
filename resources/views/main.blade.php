<!--メインメニュー-->
@extends('app')

@section('title', 'main')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
@endsection

@include('nav')

<body>
<div class="jumbotron_all jumbotron-extend jumbotron-height">
	<div class="container text-center text-light">
		<div class="pt-5">
			気になったハンドを投稿する</br>
			<button class="btn btn-dark btn-gradient"
			onclick="location.href='/articles/create'">
				Post Hand Review
			</button>
		</div>

		<div class="mt-4">
			みんなのハンド履歴をチェック</br>
			<button class="btn btn-dark btn-gradient"
			onclick="location.href='/articles/index'">
				Hand Review Forum
			</button>
		</div>

		<div class="mt-4 pb-auto">
			プリフロップレンジ表を確認</br>
			<button 
			class="btn btn-dark btn-gradient"
			onclick="location.href='/range'">
				Preflop Range Checker
			</button>
		</div>
	</div>
</body>