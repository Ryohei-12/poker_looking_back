@extends('app')

@section('title', 'オープンポジション')
	@include('nav')

<h2>ハンドレンジ表</h2>
	<button onclick="location.href='/handrange'">戻る</button>
	オープンポジションを選択
	<button onclick="location.href='/openrange/utgrange'">UTG</button>


openrange/openposition