<!--投稿フォーム画面-->
@csrf
<div class="md-form">
	<label class="text-light">タイトル</label>
		<input type="text" name="title" class="form-control text-light" required value="{{ $article->title ?? old('title') }}" placeholder="例:big pot!!!">
</div>
<div class="form-group">

	<!--選択肢表示・編集時は以前の入力内容を保持-->
	<label class="text-light">ハンド</label><br />
	<select name="first_rank">
		@php
		$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
		foreach($rank as $rank){
			if ( ! empty( $article['first_rank'] ) ) {
				if ( $rank === old('first_rank', $article['first_rank']) ) {
					echo '<option value="' . $rank . '" selected>' . $rank . '</option>';
				} else {
					echo '<option value="' . $rank . '">' . $rank . '</option>';
				} 
			}else {
				echo '<option value="' . $rank . '">' . $rank . '</option>';
			}
		}
		@endphp
	</select>

	<select name="first_suit">
	@php
	$suit = array('', 's', 'h', 'd', 'c');
	foreach($suit as $suit){
		if ( ! empty( $article['first_suit'] ) ) {
				if ( $suit === old('first_suit', $article['first_suit']) ) {
					echo '<option value="' . $suit . '" selected>' . $suit . '</option>';
				} else {
					echo '<option value="' . $suit . '">' . $suit . '</option>';
				} 
			}else {
				echo '<option value="' . $suit . '">' . $suit . '</option>';
			}
		}
	@endphp
	</select>

	<select name="second_rank">
		@php
		$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
		foreach($rank as $rank){
			if ( ! empty( $article['second_rank'] ) ) {
				if ( $rank === old('second_rank', $article['second_rank']) ) {
					echo '<option value="' . $rank . '" selected>' . $rank . '</option>';
				} else {
					echo '<option value="' . $rank . '">' . $rank . '</option>';
				} 
			}else {
				echo '<option value="' . $rank . '">' . $rank . '</option>';
			}
		}
		@endphp
	</select>

	<select name="second_suit">
		@php
		$suit = array('', 's', 'h', 'd', 'c');
		foreach($suit as $suit){
			if ( ! empty( $article['second_suit'] ) ) {
					if ( $suit === old('second_suit', $article['second_suit']) ) {
						echo '<option value="' . $suit . '" selected>' . $suit . '</option>';
					} else {
						echo '<option value="' . $suit . '">' . $suit . '</option>';
					} 
				}else {
					echo '<option value="' . $suit . '">' . $suit . '</option>';
				}
			}
		@endphp
	</select>
</div>

<div class="form-group">
	<label class="text-light">ポジション</label><br />
	<select name="position">
	@php
	$position = array('', 'UTG', 'EP2', 'EP3', 'MP1', 'MP2', 'MP3', 'CO', 'BTN', 'SB', 'BB');
	foreach($position as $position){
		if ( ! empty( $article['position'] ) ) {
				if ( $position === old('position', $article['position']) ) {
					echo '<option value="' . $position . '" selected>' . $position . '</option>';
				} else {
					echo '<option value="' . $position . '">' . $position . '</option>';
				} 
			}else {
				echo '<option value="' . $position . '">' . $position . '</option>';
			}
		}
	@endphp
	</select>
</div>

<div class="md-form form-inline">
	<label class="text-light">スタック</label>
	<input type="text" name="stack" placeholder="例:100.00" class="form-control col-3 text-light" value="{{ $article->stack ?? old('stack') }}">BB
</div>

<div class="form-group">
	<label class="text-light">プリフロップのアクション</label><br />
	<textarea name="action_at_preflop">{{ $article->action_at_preflop ?? old('action_at_preflop') }}</textarea>
</div>

<div class="form-group">
	<label class="text-light">フロップ</label><br />
	<select name="flop_1_rank">
		@php
		$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
		foreach($rank as $rank){
			if ( ! empty( $article['flop_1_rank'] ) ) {
				if ( $rank === old('flop_1_rank', $article['flop_1_rank']) ) {
					echo '<option value="' . $rank . '" selected>' . $rank . '</option>';
				} else {
					echo '<option value="' . $rank . '">' . $rank . '</option>';
				} 
			}else {
				echo '<option value="' . $rank . '">' . $rank . '</option>';
			}
		}
		@endphp
	</select>

	<select name="flop_1_suit">
	@php
	$suit = array('', 's', 'h', 'd', 'c');
	foreach($suit as $suit){
		if ( ! empty( $article['flop_1_suit'] ) ) {
				if ( $suit === old('flop_1_suit', $article['flop_1_suit']) ) {
					echo '<option value="' . $suit . '" selected>' . $suit . '</option>';
				} else {
					echo '<option value="' . $suit . '">' . $suit . '</option>';
				} 
			}else {
				echo '<option value="' . $suit . '">' . $suit . '</option>';
			}
		}
	@endphp
	</select>

	<select name="flop_2_rank">
		@php
		$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
		foreach($rank as $rank){
			if ( ! empty( $article['flop_2_rank'] ) ) {
				if ( $rank === old('flop_2_rank', $article['flop_2_rank']) ) {
					echo '<option value="' . $rank . '" selected>' . $rank . '</option>';
				} else {
					echo '<option value="' . $rank . '">' . $rank . '</option>';
				} 
			}else {
				echo '<option value="' . $rank . '">' . $rank . '</option>';
			}
		}
		@endphp
	</select>

	<select name="flop_2_suit">
		@php
		$suit = array('', 's', 'h', 'd', 'c');
		foreach($suit as $suit){
			if ( ! empty( $article['flop_2_suit'] ) ) {
					if ( $suit === old('flop_2_suit', $article['flop_2_suit']) ) {
						echo '<option value="' . $suit . '" selected>' . $suit . '</option>';
					} else {
						echo '<option value="' . $suit . '">' . $suit . '</option>';
					} 
				}else {
					echo '<option value="' . $suit . '">' . $suit . '</option>';
				}
			}
		@endphp
	</select>

	<select name="flop_3_rank">
		@php
		$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
		foreach($rank as $rank){
			if ( ! empty( $article['flop_3_rank'] ) ) {
				if ( $rank === old('flop_3_rank', $article['flop_3_rank']) ) {
					echo '<option value="' . $rank . '" selected>' . $rank . '</option>';
				} else {
					echo '<option value="' . $rank . '">' . $rank . '</option>';
				} 
			}else {
				echo '<option value="' . $rank . '">' . $rank . '</option>';
			}
		}
		@endphp
	</select>

	<select name="flop_3_suit">
		@php
		$suit = array('', 's', 'h', 'd', 'c');
		foreach($suit as $suit){
			if ( ! empty( $article['flop_3_suit'] ) ) {
					if ( $suit === old('flop_3_suit', $article['flop_3_suit']) ) {
						echo '<option value="' . $suit . '" selected>' . $suit . '</option>';
					} else {
						echo '<option value="' . $suit . '">' . $suit . '</option>';
					} 
				}else {
					echo '<option value="' . $suit . '">' . $suit . '</option>';
				}
			}
		@endphp
	</select>
</div>

<div class="form-group">
	<label class="text-light">フロップのアクション</label><br />
	<textarea name="action_at_flop">{{ $article->action_at_flop ?? old('action_at_flop') }}</textarea>
</div>

<div class="form-group">
	<label class="text-light">ターン</label><br />
	<select name="turn_rank">
		@php
		$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
		foreach($rank as $rank){
			if ( ! empty( $article['turn_rank'] ) ) {
				if ( $rank === old('turn_rank', $article['turn_rank']) ) {
					echo '<option value="' . $rank . '" selected>' . $rank . '</option>';
				} else {
					echo '<option value="' . $rank . '">' . $rank . '</option>';
				} 
			}else {
				echo '<option value="' . $rank . '">' . $rank . '</option>';
			}
		}
		@endphp
	</select>

	<select name="turn_suit">
		@php
		$suit = array('', 's', 'h', 'd', 'c');
		foreach($suit as $suit){
			if ( ! empty( $article['turn_suit'] ) ) {
					if ( $suit === old('turn_suit', $article['turn_suit']) ) {
						echo '<option value="' . $suit . '" selected>' . $suit . '</option>';
					} else {
						echo '<option value="' . $suit . '">' . $suit . '</option>';
					} 
				}else {
					echo '<option value="' . $suit . '">' . $suit . '</option>';
				}
			}
		@endphp
	</select>
</div>

<div class="form-group">
	<label class="text-light">ターンのアクション</label><br />
	<textarea name="action_at_turn">{{ $article->action_at_turn ?? old('action_at_turn') }}</textarea>
</div>

<div class="form-group">
	<label class="text-light">リバー</label><br />
	<select name="river_rank">
		@php
		$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
		foreach($rank as $rank){
			if ( ! empty( $article['river_rank'] ) ) {
				if ( $rank === old('river_rank', $article['river_rank']) ) {
					echo '<option value="' . $rank . '" selected>' . $rank . '</option>';
				} else {
					echo '<option value="' . $rank . '">' . $rank . '</option>';
				} 
			}else {
				echo '<option value="' . $rank . '">' . $rank . '</option>';
			}
		}
		@endphp
	</select>

	<select name="river_suit">
		@php
		$suit = array('', 's', 'h', 'd', 'c');
		foreach($suit as $suit){
			if ( ! empty( $article['river_suit'] ) ) {
					if ( $suit === old('river_suit', $article['river_suit']) ) {
						echo '<option value="' . $suit . '" selected>' . $suit . '</option>';
					} else {
						echo '<option value="' . $suit . '">' . $suit . '</option>';
					} 
				}else {
					echo '<option value="' . $suit . '">' . $suit . '</option>';
				}
			}
		@endphp
	</select>
</div>

<div class="form-group">
	<label class="text-light">リバーのアクション</label><br />
	<textarea name="action_at_river">{{ $article->action_at_river ?? old('action_at_river') }}</textarea>
</div>

<div class="form-group">
	<label class="text-light">相手のショーダウンハンド</label><br />
	<select name="opponent_first_rank">
		@php
		$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
		foreach($rank as $rank){
			if ( ! empty( $article['opponent_first_rank'] ) ) {
				if ( $rank === old('opponent_first_rank', $article['opponent_first_rank']) ) {
					echo '<option value="' . $rank . '" selected>' . $rank . '</option>';
				} else {
					echo '<option value="' . $rank . '">' . $rank . '</option>';
				} 
			}else {
				echo '<option value="' . $rank . '">' . $rank . '</option>';
			}
		}
		@endphp
	</select>

	<select name="opponent_first_suit">
		@php
		$suit = array('', 's', 'h', 'd', 'c');
		foreach($suit as $suit){
			if ( ! empty( $article['opponent_first_suit'] ) ) {
					if ( $suit === old('opponent_first_suit', $article['opponent_first_suit']) ) {
						echo '<option value="' . $suit . '" selected>' . $suit . '</option>';
					} else {
						echo '<option value="' . $suit . '">' . $suit . '</option>';
					} 
				}else {
					echo '<option value="' . $suit . '">' . $suit . '</option>';
				}
			}
		@endphp
	</select>

	<select name="opponent_second_rank">
		@php
		$rank = array('', 'A', 'K', 'Q', 'J', 'T', '9', '8', '7', '6', '5', '4', '3', '2');
		foreach($rank as $rank){
			if ( ! empty( $article['opponent_second_rank'] ) ) {
				if ( $rank === old('opponent_second_rank', $article['opponent_second_rank']) ) {
					echo '<option value="' . $rank . '" selected>' . $rank . '</option>';
				} else {
					echo '<option value="' . $rank . '">' . $rank . '</option>';
				} 
			}else {
				echo '<option value="' . $rank . '">' . $rank . '</option>';
			}
		}
		@endphp
	</select>

	<select name="opponent_second_suit">
		@php
		$suit = array('', 's', 'h', 'd', 'c');
		foreach($suit as $suit){
			if ( ! empty( $article['opponent_second_suit'] ) ) {
					if ( $suit === old('opponent_second_suit', $article['opponent_second_suit']) ) {
						echo '<option value="' . $suit . '" selected>' . $suit . '</option>';
					} else {
						echo '<option value="' . $suit . '">' . $suit . '</option>';
					} 
				}else {
					echo '<option value="' . $suit . '">' . $suit . '</option>';
				}
			}
		@endphp
	</select>
</div>

<div class="md-form form-inline">
	<label class="text-light">収支</label><br />
	<input type="text" name="result" placeholder="例:100.00" class="form-control col-3 text-light" value="{{ $article->result ?? old('result') }}">BB
</div>

<div class="form-group">
	<label class="text-light">コメント</label><br />
	<textarea name="body" required class="form-control" rows="5">{{ $article->body ?? old('body') }}</textarea>
</div>