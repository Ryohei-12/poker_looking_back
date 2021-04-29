<!--投稿詳細画面-->
@extends('app')

@section('title', 'detail')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/articles/show.css') }}">
@endsection

@section('content')
  @include('nav')

<div class="jumbotron_all jumbotron-extend">
  <div class="container text-light">
    <!--編集・コメントした際にコントローラーで指定したメッセージ表示-->
    @if (session('commentstatus'))
      <div class="alert alert-success mt-4 mb-4">
          {{ session('commentstatus') }}
      </div>
    @endif

    <div class="container">
      <button class="btn btn-dark back-btn"
      onclick="location.href='/articles/index'">
        一覧に戻る
      </button>

      @include('articles.card')
    
      <section>
        <div class="card mt-3 mx-auto comment-card">
          <div class="card-body d-flex flex-row">
            <div class="card-body pt-0">
              <h4 class="h5 mb-4 text-light">コメント</h4>

                  <!--コメント一覧-->  
                  @foreach($article->comment as $comment)
                    <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="text-light">
                      <i class="fab fa-bitcoin fa-2x mr-1"></i>
                    </a>
                  <div>
                    <div class="font-weight-bold">
                      <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="text-light">
                        {{ $comment->user->name }}
                      </a>
                    </div>
                    <time class="text-light comment-time">
                      {{ $comment->created_at->format('Y.m.d H:i') }}
                    </time>
                  
                    <!--コメント投稿者とログインユーザーが一致した際に表示-->
                    @if( Auth::id() === $comment->user_id )
                      <!-- dropdown -->
                        <div class="ml-auto card-text">
                          <div class="dropdown float-right">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v text-light"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $comment->id }}">
                                <i class="fas fa-trash-alt mr-1"></i>コメントを削除する
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- dropdown終了 -->

                        <!-- 削除modal -->
                        <div id="modal-delete-{{ $comment->id }}" class="modal fade" tabindex="-1" role="dialog">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content modal-style">
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
                                  <a class="btn btn-outline-light text-light" data-dismiss="modal">キャンセル</a>
                                  <button type="submit" class="btn btn-danger">削除する</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- 削除modal終了 -->
                      @endif

                    <div class="py-3">
                      <p class="mt-2 border-top">
                        {!! nl2br(e($comment->body)) !!}
                      </p>
                    </div>
                  </div>
                @endforeach

                <!--コメントがない際に表示-->
                @if (empty($comment))
                  <p class="text-light">コメントはまだありません。</p>
                @else
                @endif
            </div>
          </div>
        </div>
      </section>

    <!--新規コメント作成-->
    <form class="mb-4" method="POST" action="{{ route('comments.store') }}">
      @csrf
        <div class="form-group mt-4">
          <!--CommentControllerにarticle_idを送る-->
          <input name="article_id" type="hidden" value="{{ $article->id }}">
            <label class="text-light" for="body">新規コメント</label>
              <textarea name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}">{{ old('body') }}</textarea>
              @if ($errors->has('body'))
                <div class="invalid-feedback">
                  {{ $errors->first('body') }}
                </div>
              @endif
        </div>
        <div class="mt-4 ml-5">
          <div class="text-center">
            <button type="submit"
            class="btn btn-dark comment-btn">
              コメントする
            </button>
          </div>
        </div>
    </form>
  </div>
</div>
@endsection