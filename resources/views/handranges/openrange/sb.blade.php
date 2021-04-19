@extends('app')

@section('title', 'ハンドレンジ表')
	@include('nav')

<h2>Open Rase Range From SB</h2>

<img src="{{ asset('img/open_SB.png') }}" alt="">
<br/>

※orange = Raise<br />
※green = call<br/>
<button onclick="location.href='/range/openrange'">ポジション選択画面に戻る</button><br />
