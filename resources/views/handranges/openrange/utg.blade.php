<!--UTGからのオープンレンジ表-->
@extends('app')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/handranges/openrange/chart.css') }}">
@endsection

@section('title', 'utg open range')
	@include('nav')

	<body>
		<div class="jumbotron_all jumbotron-extend jumbotron-height">
			<div class="container text-center text-light">
				<h2>Open Raise Range From UTG</h2>

				<img src="{{ asset('/storage/img/open_UTG.png') }}" alt="">
				<br/>

				※orange = Raise<br />
				<button class="btn btn-dark back-btn"
				onclick="location.href='/range/openrange'">
					ポジション選択画面に戻る
				</button>
			</div>
		</div>
	</body>