@extends('app')

@section('title', 'ハンドレンジ表')
	@include('nav')

<h2>Open Rase Range From HJ</h2>

<img src="{{ asset('img/open_HJ.png') }}" alt="">
<br/>

※orange = Raise<br/>

<button onclick="location.href='/range/openrange'">ポジション選択画面に戻る</button><br />
