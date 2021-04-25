@extends('app')

@section('title', 'ハンドレンジ表')
	@include('nav')

	<body>
		<div class="jumbotron_all jumbotron-extend" style="height: 100vh;">
			<div class="container text-center text-light">
				<h2 style="padding-top:10px; margin-bottom:30px">Open Raise Range From UTG</h2>

				<img src="{{ asset('img/open_UTG.png') }}" alt="">
				<br/>

				※orange = Raise<br />
				<button onclick="location.href='/range/openrange'">ポジション選択画面に戻る</button><br />
			</div>
		</div>
	</body>