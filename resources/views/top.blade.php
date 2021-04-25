<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Document</title>

	<style type="text/css">
	html {
		height: 100%;
		margin: 0;}

	.jumbotron { 
		background-image:url(../img/background.PNG);
		background-position: center center; 
    	background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;
		height: auto;
		background-color:black;}
    </style>
</head>

<body>
<div class="jumbotron jumbotron-extend">
<div class="container text-center text-light">
	<h1>Poker looking back</h1>
	
	<h5 class="mt-3">~ by Poker player for Poker player ~</h5>

	<h3 class="mt-5">スキルアップしたいか？</h3>
	<p>ポーカーのスキルアップに必須の</br>
	レビューに特化した唯一のコミュニティ。</p>
	
	<div>
		<button class="btn btn-dark" 
		style="background: linear-gradient(-135deg, #000000, #009966); font-size:20px; width:160px; height: 60px; margin:10px" 
		onclick="location.href='/login'">
			ログイン
		</button>
		</br>

		<button class="btn btn-dark" 
		style="background: linear-gradient(-135deg, #000000, #009966); font-size:20px; width:160px; height: 60px; margin:10px" 
		onclick="location.href='/register'">
			新規登録
		</button>
	</div>

	<h3 class="mt-4">印象に残ったハンドを記録</h3>
	<p>気になったスポットをその場で保存。</br>
	後の座学の際にスムーズに見返すことが可能に。</p>

	<h3 class="mt-4">他者からのハンドレビュー</h3>
	<p>他のプレイヤーからのハンドレビューでさらなるスキルアップを。</p>
</div>
</div>

</body>
</html>