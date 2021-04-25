@extends('app')

@section('title', 'メインメニュー')

@include('nav')

<body>
<div class="jumbotron_all jumbotron-extend" style="height: 100vh;">
	<div class="container text-center text-light">
		<div class="pt-5">
			気になったハンドを投稿する</br>
			<button class="btn btn-dark" 
			style="background: linear-gradient(-135deg, #000000, #009966); font-size:20px; width:270px; height: 60px; margin:10px"
			onclick="location.href='/articles/create'">
				Post Hand Review
			</button>
		</div>

		<div class="mt-4">
			みんなのハンド履歴をチェック</br>
			<button class="btn btn-dark" 
			style="background: linear-gradient(-135deg, #000000, #009966); font-size:20px; width:270px; height: 60px; margin:10px"
			onclick="location.href='/articles/index'">
				Hand Review Forum
			</button>
		</div>

		<div class="mt-4 pb-auto">
			プリフロップレンジ表を確認</br>
			<button 
			class="btn btn-dark"
			style="background: linear-gradient(-135deg, #000000, #009966); font-size:20px; width:270px; height: 60px; margin:10px"
			onclick="location.href='/range'">
				Preflop Range Checker
			</button>
		</div>
	</div>
</body>