<!--HJ空のオープンレンジ表-->
@extends('app')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/handranges/openrange/chart.css') }}">
@endsection

@section('title', 'hj open range')
	@include('nav')

	<body>
		<div class="jumbotron_all jumbotron-extend jumbotron-height">
			<div class="container text-center text-light">

				<h2>Open Raise Range From HJ</h2>

				<img src="{{ asset('/storage/img/open_HJ.png') }}" alt="">
				<br/>

				<p class="mt-3">※orange = Raise</p>

				<button  class="btn btn-dark back-btn"
				onclick="location.href='/range/openrange'">
					ポジション選択画面に戻る
				</button>
			</div>
		</div>
	</body>