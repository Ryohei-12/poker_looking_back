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
			<textarea name="hand"></textarea>
		</div>

		<div>
			<label>ポジション</label><br />
			<textarea name="position"></textarea>
		</div>

		<div>
			<label>スタック</label><br />
			<textarea name="stack"></textarea>
		</div>

		<div>
			<label>フロップ</label><br />
			<textarea name="flop"></textarea>
		</div>

		<div>
			<label>フロップのアクション</label><br />
			<textarea name="action_at_flop"></textarea>
		</div>

		<div>
			<label>ターン</label><br />
			<textarea name="turn"></textarea>
		</div>

		<div>
			<label>ターンのアクション</label><br />
			<textarea name="action_at_turn"></textarea>
		</div>

		<div>
			<label>リバー</label><br />
			<textarea name="river"></textarea>
		</div>

		<div>
			<label>リバーのアクション</label><br />
			<textarea name="action_at_river"></textarea>
		</div>

		<div>
			<label>相手のショーダウンハンド</label><br />
			<textarea name="hand_of_opponent"></textarea>
		</div>

		<div>
			<label>収支</label><br />
			<textarea name="result"></textarea>
		</div>

		<div>
			<label>投稿文</label><br />
			<textarea name="body"></textarea>
		</div>

		<input type="submit" value="投稿" /> 
	</form>

</body>
</html>