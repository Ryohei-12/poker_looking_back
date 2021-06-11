<!--ハンドレンジ表、シチュエーション選択画面-->
@extends('app')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/handranges/handrange.css') }}">
@endsection

@section('title', 'choose situation')
	@include('nav')

	<body>
		<div class="jumbotron jumbotron-extend jumbotron-height">
			<div class="container text-center text-light">

				<h1>Hand Range</h1>
				シチュエーションを選んでください<br/>
				<button 
				class="btn btn-dark btn-style"
				onclick="location.href='/range/openrange'">
				Open Range
				</button><br />

				<button
				class="btn btn-dark  btn-style"
				onclick="location.href='/range/facing_a_raise'">
				Facing A Raise
				</button><br />

				<button
				class="btn btn-dark  btn-style"
				onclick="location.href='/range/facing_a_3bet'">
				Facing A 3Bet
				</button><br />

				<button
				class="btn btn-dark menu-btn"
				onclick="location.href='/main'">
				メインページに戻る
				</button>

			</div>
		</div>
	</body>