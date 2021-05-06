<!--オープンポジション選択画面-->
@extends('app')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/handranges/openrange.css') }}">
@endsection

@section('title', 'choose open position')
	@include('nav')

	<body>
		<div class="jumbotron jumbotron-extend jumbotron-height">
			<div class="container text-center text-light">

				<h1>Open Range</h1>

				<h4>ポジション選択</h4>
				<button class="btn btn-dark btn-style" onclick="location.href='/range/openrange/utg'">UTG</button><br />
				<button class="btn btn-dark btn-style" onclick="location.href='/range/openrange/hj'">HJ</button><br />
				<button class="btn btn-dark btn-style" onclick="location.href='/range/openrange/co'">CO</button><br />
				<button class="btn btn-dark btn-style" onclick="location.href='/range/openrange/btn'">BTN</button><br />
				<button class="btn btn-dark btn-style" onclick="location.href='/range/openrange/sb'">SB</button><br />
			
				<button class="btn btn-dark back-btn" onclick="location.href='/range'">
				シチュエーション選択に戻る
				</button>
	
			</div>
		</div>
	</body>