@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')

  @if (session('commentstatus'))
    <div class="alert alert-success mt-4 mb-4">
        {{ session('commentstatus') }}
    </div>
	@endif

  <div class="container">
  <button onclick="location.href='/articles/index'">記事一覧へ戻る</button>
    @include('articles.card')
  </div>
  
  <section>
    <div class="card mt-3">
      <div class="card-body d-flex flex-row">
        <div class="card-body pt-0">
          <h3 class="h5 mb-4">コメント</h3>
            @if($article->comment)
              @foreach($article->comment as $comment)
              <i class="fab fa-bitcoin fa-2x mr-1"></i>
              <div>
                <div class="font-weight-bold">{{ $comment->user->name }}</div>
                <time class="text-secondary">
                  {{ $comment->created_at->format('Y.m.d H:i') }}
                </time>
              </div>

                @if( Auth::id() === $comment->user_id )
                  <!-- dropdown -->
                    <div class="ml-auto card-text">
                      <div class="dropdown">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $comment->id }}">
                            <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- dropdown -->

                    <!-- modal -->
                    <div id="modal-delete-{{ $comment->id }}" class="modal fade" tabindex="-1" role="dialog">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form method="POST" action="{{ route('comments.destroy', ['comment' => $comment]) }}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                              コメントを削除します。よろしいですか？
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
                  
                  <div class="border-top p-4">
                <p class="mt-2">
                  {!! nl2br(e($comment->body)) !!}
                </p>
              </div>
              @endforeach
            @else
              <p>コメントはまだありません。</p>
            @endif
        </div>
      </div>
    </div>
  </section>

  <form class="mb-4" method="POST" action="{{ route('comments.store') }}">

    @csrf
    <div class="form-group">
    <!--ここでCommentControllerにarticle_idを送る-->
    <input name="article_id" type="hidden" value="{{ $article->id }}">

        <label for="body">本文</label>
        <textarea name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="4">{{ old('body') }}</textarea>
          @if ($errors->has('body'))
              <div class="invalid-feedback">
                  {{ $errors->first('body') }}
              </div>
          @endif
    </div>

    <div class="mt-4">
        <button type="submit" class="btn btn-primary">コメントする</button>
    </div>
</form>
@endsection

