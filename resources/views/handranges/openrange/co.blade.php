<!--カットオフからのオープンレンジ表-->
@extends('app')

@section('title', 'co open range')
	@include('nav')

	<body>
		<div class="jumbotron_all jumbotron-extend" style="height: 100vh;">
			<div class="container text-center text-light">

				<h2 style="padding-top:10px; margin-bottom:30px">Open Raise Range From CO</h2>

				<img src="{{ asset('img/open_CO.png') }}" alt="">
				<br/>

				<p class="mt-3">※orange = Raise</p>

				<button  class="btn btn-dark"
				style="background: linear-gradient(-135deg, #000000, #009966); font-size:14px; width:210px; height: 40px; margin:15px; padding-bottom: 32px;"
				onclick="location.href='/range/openrange'">
					ポジション選択画面に戻る
				</button>
			</div>
		</div>
	</body>