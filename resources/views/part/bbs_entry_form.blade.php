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
			<select name="first_rank">
			<option value="A">A</option>
    		<option value="K">K</option>
    		<option value="Q">Q</option>
			<option value="J">J</option>
			<option value="T">T</option>
			<option value="9">9</option>
			<option value="8">8</option>
			<option value="7">7</option>
			<option value="6">6</option>
			<option value="5">5</option>
			<option value="4">4</option>
			<option value="3">3</option>
			<option value="2">2</option>
			</select>

			<select name="first_suit">
			<option value="s">s</option>
    		<option value="h">h</option>
    		<option value="d">d</option>
			<option value="c">c</option>
			</select>

			<select name="second_rank">
			<option value="A">A</option>
    		<option value="K">K</option>
    		<option value="Q">Q</option>
			<option value="J">J</option>
			<option value="T">T</option>
			<option value="9">9</option>
			<option value="8">8</option>
			<option value="7">7</option>
			<option value="6">6</option>
			<option value="5">5</option>
			<option value="4">4</option>
			<option value="3">3</option>
			<option value="2">2</option>
			</select>

			<select name="second_suit">
			<option value="s">s</option>
    		<option value="h">h</option>
    		<option value="d">d</option>
			<option value="c">c</option>
			</select>
		</div>

		<div>
			<label>ポジション</label><br />
			<select name="position">
			<option value="UTG">UTG</option>
    		<option value="EP2">EP2</option>
    		<option value="EP3">EP3</option>
			<option value="MP1">MP1</option>
			<option value="MP2">MP2</option>
			<option value="MP3">MP3</option>
			<option value="CO">CO</option>
			<option value="BTN">BTN</option>
			<option value="SB">SB</option>
			<option value="BB">BB</option>
			</select>
		</div>

		<div>
			<label>スタック</label><br />
			<textarea name="stack" placeholder="BB表記（例：100.00）"></textarea>BB
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
			<textarea name="result" placeholder="そのハンドでの収支をBB表記で入力（例：+100）"></textarea>BB
		</div>

		<div>
			<label>コメント</label><br />
			<textarea name="body"></textarea>
		</div>

		<input type="submit" value="投稿" /> 
	</form>

</body>
</html>