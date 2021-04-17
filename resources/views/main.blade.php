<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
@extends('app')

@section('title', 'メインメニュー')
	@include('nav')

    <button onclick="location.href='/articles/create'">ハンドレビュー投稿</button>

	<button onclick="location.href='/index'">ハンドレビュータイムライン</button>

	<button onclick="location.href='/handrange'">プリフロップレンジ確認</button>

</body>
</html>