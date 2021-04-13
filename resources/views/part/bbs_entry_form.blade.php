<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form method="post" action="{{ url('/create') }}">
		@csrf

		<div>
			<label>名前</label><br />
			<input type="text" name="author" value="" placeholder="お名前" />
		</div>

		<div>
			<label>タイトル</label><br />
			<input type="text" name="title" value="" placeholder="タイトル" />
		</div>

		<div>
			<label>ハンド</label><br />
			<textarea name="hand" placeholder="スターティングハンドを入力（例：AdAs）"></textarea>
		</div>

		<div>
			<label>ポジション</label><br />
			<textarea name="position" placeholder="例：BTN"></textarea>
		</div>

		<div>
			<label>スタック</label><br />
			<textarea name="stack" placeholder="BB表記（例：100）"></textarea><p>BB</p>
		</div>

		<div>
			<label>プリフロップのアクション</label><br />
			<textarea name="action_at_preflop"></textarea>
		</div>

		<div>
			<label>フロップ</label><br />
			<textarea name="flop" placeholder="フロップを入力（例：AcTd2d）"></textarea>
		</div>

		<div>
			<label>フロップのアクション</label><br />
			<textarea name="action_at_flop"></textarea>
		</div>

		<div>
			<label>ターン</label><br />
			<textarea name="turn" placeholder="ターンを入力（例：4d）"></textarea>
		</div>

		<div>
			<label>ターンのアクション</label><br />
			<textarea name="action_at_turn"></textarea>
		</div>

		<div>
			<label>リバー</label><br />
			<textarea name="river" placeholder="リバーを入力（例：7d）"></textarea>
		</div>

		<div>
			<label>リバーのアクション</label><br />
			<textarea name="action_at_river"></textarea>
		</div>

		<div>
			<label>相手のショーダウンハンド</label><br />
			<textarea name="hand_of_opponent" placeholder="ショーダウン時の相手のハンドを入力（例：KcKd）"></textarea>
		</div>

		<div>
			<label>収支</label><br />
			<textarea name="result" placeholder="そのハンドでの収支をBB表記で入力（例：+100）"></textarea>
		</div>

		<div>
			<label>コメント</label><br />
			<textarea name="body"></textarea>
		</div>

		<input type="submit" value="投稿" /> 
	</form>

</body>
</html>