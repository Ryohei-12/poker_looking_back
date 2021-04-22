<div class="card mt-3">
  <div class="card-body d-flex flex-row">
  <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="text-dark">
    <i class="fab fa-bitcoin fa-3x mr-1"></i>
  </a>

    <div>
      <div class="font-weight-bold">
        <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="text-dark">
        {{ $article->user->name }}
        </a>
      </div>
      <div class="font-weight-lighter">{{ $article->created_at->format('Y/m/d H:i') }}</div>
    </div>

  @if( Auth::id() === $article->user_id )
    <!-- dropdown -->
      <div class="ml-auto card-text">
        <div class="dropdown">
          <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ route("articles.edit", ['article' => $article]) }}">
              <i class="fas fa-pen mr-1"></i>記事を更新する
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
              <i class="fas fa-trash-alt mr-1"></i>記事を削除する
            </a>
          </div>
        </div>
      </div>
    <!-- dropdown -->

     <!-- modal -->
      <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
              @csrf
              @method('DELETE')
              <div class="modal-body">
                {{ $article->title }}を削除します。よろしいですか？
              </div>
              <div class="modal-footer justify-content-between">
                <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                <button type="submit" class="btn btn-danger">削除する</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <!-- modal -->
  @endif

  </div>
  <div class="card-body pt-0">
    <h3 class="h4 card-title">
      <a class="text-dark" href="{{ route('articles.show', ['article' => $article]) }}">
        {{ $article->title }}
      </a>
    </h3>
    <div class="card-text">
		<p>
		ハンド：{{ $article->first_rank }}{{ $article->first_suit }},{{ $article->second_rank }}{{ $article->second_suit }} <br>
		ポジション：{{ $article->position }} <br>
		スタック：{{ $article->stack }} <br>
		プリフロップのアクション：{!! nl2br($article->action_at_preflop) !!} <br>
		フロップ：{{ $article->flop_1_rank }}{{ $article->flop_1_suit }},{{ $article->flop_2_rank }}{{ $article->flop_2_suit }},{{ $article->flop_3_rank }}{{ $article->flop_3_suit }} <br>
		フロップのアクション：{!! nl2br($article->action_at_flop) !!} <br>
		ターン：{{ $article->turn_rank }}{{ $article->turn_suit }} <br>
		ターンのアクション：{!! nl2br($article->action_at_turn) !!} <br>
		リバー：{{ $article->river_rank }}{{ $article->river_suit }} <br>
		リバーのアクション：{!! nl2br($article->action_at_river) !!} <br>
		相手のショーダウンハンド：{{ $article->opponent_first_rank }}{{ $article->opponent_first_suit }},{{ $article->opponent_second_rank }}{{ $article->opponent_second_suit }} <br>
		収支：{{ $article->result }} <br>
		</p>
		コメント<br>
		{!! nl2br($article->body) !!}
    </div>

    <a class="text-dark" href="{{ route('articles.show', ['article' => $article]) }}">
      コメントを見る
    </a>

  </div>
</div>
