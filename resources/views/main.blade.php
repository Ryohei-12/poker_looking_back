@extends('app')

@section('title', 'メインメニュー')
	@include('nav')

    <button onclick="location.href='/articles/create'">ハンドレビュー投稿</button>

	<button onclick="location.href='/index'">ハンドレビュータイムライン</button>

	<button onclick="location.href='/handrange'">プリフロップレンジ確認</button>
