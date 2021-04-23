@extends('app')

@section('title', 'ハンドレンジ表')
	@include('nav')

	<h2>Open Range</h2>
	<button onclick="location.href='/range'">シチュエーション選択</button><br />

	<div class="container">

	<h4>ポジション選択</h4>
	<button onclick="location.href='/range/openrange/utg'">UTG</button><br />
	<button onclick="location.href='/range/openrange/hj'">HJ</button><br />
	<button onclick="location.href='/range/openrange/co'">CO</button><br />
	<button onclick="location.href='/range/openrange/btn'">BTN</button><br />
	<button onclick="location.href='/range/openrange/sb'">SB</button><br />
	
	
	
	
	</div>