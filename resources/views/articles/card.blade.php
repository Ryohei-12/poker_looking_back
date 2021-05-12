<!--記事の内容-->
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/articles/card.css') }}">
@endsection

<div class="card mt-3 mx-auto card-style">
  <div class="card-body d-flex flex-row">
      <!--ユーザー詳細画面に遷移-->
      <a href="{{ route("users.show", ["user" => $article->user->id]) }}" class="text-light">
        <?php $user = $article->user; ?>
        @if ($user->icon_images)
        	<p>
    				<img class="round-img mr-1" src="{{ asset('storage/user_images/' . $user->icon_images) }}"/>
        	</p>
      	@else
					<i class="fas fa-user-circle fa-3x mr-1"></i>
    			@endif
      </a>
    
    <div>
      <div class="font-weight-bold text-light">
        <!--ユーザー詳細画面に遷移-->
        <a href="{{ route("users.show", ["user" => $article->user->id]) }}" class="text-light">
        {{ $article->user->name }}
        </a>
      </div>
      <div class="font-weight-lighter">{{ $article->created_at->format('Y/m/d H:i') }}</div>
    </div>

  <!--ログインしているユーザーと投稿者が一致した際に表示-->
  @if( Auth::id() === $article->user_id )
    <!-- dropdown -->
      <div class="ml-auto card-text">
        <div class="dropdown">
          <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v text-light"></i>
          </a>
          <!--投稿更新ページに接続-->
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ route("articles.edit", ['article' => $article->id]) }}">
              <i class="fas fa-pen mr-1"></i>投稿を編集する
            </a>
            <!--投稿削除機能に接続-->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
              <i class="fas fa-trash-alt mr-1"></i>投稿を削除する
            </a>
          </div>
        </div>
      </div>
    <!-- dropdown終了 -->

     <!-- 削除modal -->
      <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-style">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="{{ route('articles.destroy', ['article' => $article->id]) }}">
              @csrf
              @method('DELETE')
              <div class="modal-body">
                <p>
                  {{ $article->title }}を削除します。</br>
                  よろしいですか？
                </p>
              </div>
              <div class="modal-footer justify-content-between">
                <a class="btn btn-outline-light" data-dismiss="modal">キャンセル</a>
                <button type="submit" class="btn btn-danger">削除する</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <!-- 削除modal終了 -->
  @endif
  </div>

  <!--投稿内容-->
  <div class="card-body pt-0">
    <h3 class="h4 card-title">
      <a class="text-light" href="{{ route('articles.show', ['article' => $article->id]) }}">
        {{ $article->title }}
      </a>
    </h3>
    <div class="card-text text-light">
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

    <!--投稿詳細ページに遷移-->
    <div class="mt-4">
      <a class="detail-color" href="{{ route('articles.show', ['article' => $article->id]) }}">
        コメントを見る
      </a>
    </div>
  </div>
</div>
