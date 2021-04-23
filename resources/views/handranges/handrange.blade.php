@extends('app')

@section('title', 'ハンドレンジ表')
	@include('nav')

	<h2>Hand Range</h2>
	<button onclick="location.href='/main'">メインページに戻る</button><br />

	<div class="container">
	シチュエーションを選んでください<br/>
	<button onclick="location.href='/range/openrange'">Open Range</button><br />
	<button onclick="location.href='/range/commingsoon'">Facing A Raise</button><br />
	<button onclick="location.href='/range/commingsoon'">Facing A 3Bet</button><br />

	</div>