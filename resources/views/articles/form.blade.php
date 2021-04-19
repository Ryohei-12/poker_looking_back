@csrf
<div class="md-form">
	<label>タイトル</label>
		<input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}">
</div>
<div class="form-group">


	<label>ハンド</label><br />
	<select name="first_rank">
	<?php
	$rank = array('A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
	foreach($rank as $rank){
		print('<option value="' . $rank . '">' . $rank . '</option>');
	}
	?>
	</select>

	<select name="first_suit">
	<option value="s">s</option>
	<option value="h">h</option>
	<option value="d">d</option>
	<option value="c">c</option>
	</select>

	<select name="second_rank">
	<?php
	$rank = array('A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
	foreach($rank as $rank){
		print('<option value="' . $rank . '">' . $rank . '</option>');
	}
	?>
	</select>

	<select name="second_suit">
	<option value="s">s</option>
	<option value="h">h</option>
	<option value="d">d</option>
	<option value="c">c</option>
	</select>
</div>

<div class="form-group">
	<label>ポジション</label><br />
	<select name="position">
	<option value='' disabled style='display:none;'<?php if(empty($_POST['first_rank'])) echo 'selected'; ?>>選択してください</option>
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

<div class="form-group">
	<label>スタック</label><br />
	<textarea name="stack" placeholder="BB表記（例：100.00）"></textarea>BB
</div>

<div class="form-group">
	<label>プリフロップのアクション</label><br />
	<textarea name="action_at_preflop"></textarea>
</div>

<div class="form-group">
	<label>フロップ</label><br />
	<select name="flop_1_rank">
	<?php
	$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
	foreach($rank as $rank){
		print('<option value="' . $rank . '">' . $rank . '</option>');
	}
	?>
	</select>

	<select name="flop_1_suit">
	<option value=""> </option>
	<option value="s">s</option>
	<option value="h">h</option>
	<option value="d">d</option>
	<option value="c">c</option>
	</select>

	<select name="flop_2_rank">
	<?php
	$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
	foreach($rank as $rank){
		print('<option value="' . $rank . '">' . $rank . '</option>');
	}
	?>
	</select>

	<select name="flop_2_suit">
	<option value=""> </option>
	<option value="s">s</option>
	<option value="h">h</option>
	<option value="d">d</option>
	<option value="c">c</option>
	</select>

	<select name="flop_3_rank">
	<?php
	$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
	foreach($rank as $rank){
		print('<option value="' . $rank . '">' . $rank . '</option>');
	}
	?>
	</select>

	<select name="flop_3_suit">
	<option value=""> </option>
	<option value="s">s</option>
	<option value="h">h</option>
	<option value="d">d</option>
	<option value="c">c</option>
	</select>
</div>

<div class="form-group">
	<label>フロップのアクション</label><br />
	<textarea name="action_at_flop">{{ $article->action_at_flop ?? old('action_at_flop') }}</textarea>
</div>

<div class="form-group">
	<label>ターン</label><br />
	<select name="turn_rank">
	<?php
	$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
	foreach($rank as $rank){
		print('<option value="' . $rank . '">' . $rank . '</option>');
	}
	?>
	</select>

	<select name="turn_suit">
	<option value=""> </option>
	<option value="s">s</option>
	<option value="h">h</option>
	<option value="d">d</option>
	<option value="c">c</option>
	</select>
</div>

<div class="form-group">
	<label>ターンのアクション</label><br />
	<textarea name="action_at_turn">{{ $article->action_at_turn ?? old('action_at_turn') }}</textarea>
</div>

<div class="form-group">
	<label>リバー</label><br />
	<select name="river_rank">
	<?php
	$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
	foreach($rank as $rank){
		print('<option value="' . $rank . '">' . $rank . '</option>');
	}
	?>
	</select>

	<select name="river_suit">
	<option value=""> </option>
	<option value="s">s</option>
	<option value="h">h</option>
	<option value="d">d</option>
	<option value="c">c</option>
	</select>
</div>

<div class="form-group">
	<label>リバーのアクション</label><br />
	<textarea name="action_at_river">{{ $article->action_at_river ?? old('action_at_river') }}</textarea>
</div>

<div class="form-group">
	<label>相手のショーダウンハンド</label><br />
	<select name="opponent_first_rank">
	<?php
	$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
	foreach($rank as $rank){
		print('<option value="' . $rank . '">' . $rank . '</option>');
	}
	?>
	</select>

	<select name="opponent_first_suit">
	<option value=""> </option>
	<option value="s">s</option>
	<option value="h">h</option>
	<option value="d">d</option>
	<option value="c">c</option>
	</select>

	<select name="opponent_second_rank">
	<?php
	$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
	foreach($rank as $rank){
		print('<option value="' . $rank . '">' . $rank . '</option>');
	}
	?>
	</select>

	<select name="opponent_second_suit">
	<option value=" "> </option>
	<option value="s">s</option>
	<option value="h">h</option>
	<option value="d">d</option>
	<option value="c">c</option>
	</select>
</div>

<div class="form-group">
	<label>収支</label><br />
	<textarea name="result" placeholder="そのハンドでの収支をBB表記で入力（例：+100）"></textarea>BB
</div>

<div class="form-group">
	<label>コメント</label><br />
	<textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ $article->body ?? old('body') }}</textarea>
</div>