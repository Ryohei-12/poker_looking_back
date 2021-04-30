<!--トップページ-->
@extends('app')

@section('title', 'top')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/top.css') }}">
@endsection

<body>
	<div class="jumbotron_all jumbotron-extend jumbotron-height">
		<div class="container text-center text-light">
			<h1 class="pt-4">
				Poker looking back
			</h1>
			<h5 class="mt-3">
				~ by Poker player for Poker player ~
			</h5>
			<h3 class="mt-5">
				スキルアップしたいか？
			</h3>
			<p>
				ポーカーのスキルアップに必須の</br>
				レビューに特化した唯一のコミュニティ。
			</p>
			<div>
				<button class="btn btn-dark btn-gradient"
				onclick="location.href='/login'">
					ログイン
				</button></br>

				<button class="btn btn-dark btn-gradient"
				onclick="location.href='/register'">
					新規登録
				</button>
			</div>
			<h3 class="mt-4">
				印象に残ったハンドを記録
			</h3>
			<p>
				気になったスポットをその場で保存。</br>
				後の座学の際にスムーズに見返すことが可能に。
			</p>
			<h3 class="mt-4">
				他者からのハンドレビュー
			</h3>
			<p>
				他のプレイヤーからのハンドレビューでさらなるスキルアップを。
			</p>
		</div>
	</div>
</body>
</html>