@extends('app')

@section('title', 'メインメニュー')
	@include('nav')

	<div style="text-align: center;">
		<div>
			気になったハンドを投稿する</br>
			<button style="color:ivory; background-color:black; font-size:20px; width:160px; height: 60px; margin:10px" onclick="location.href='/articles/create'">ハンドレビュー投稿</button>
		</div>

		<div>
			みんなのハンド履歴をチェック</br>
			<button style="color:ivory; background-color:black; font-size:20px; width:160px; height: 60px; margin:10px" onclick="location.href='/articles/index'">ハンドレビュータイムライン</button>
		</div>

		<div>
			プリフロップレンジ表を確認</br>
			<button style="color:ivory; background-color:black; font-size:20px; width:160px; height: 60px; margin:10px" onclick="location.href='/range'">プリフロップレンジ確認</button>
		</div>
	</div>