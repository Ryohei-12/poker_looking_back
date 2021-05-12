<!--投稿編集ページ-->
@extends('app')

@section('title', 'update hand review')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/articles/edit.css') }}">
@endsection

@section('content')
  @include('nav')

<body>
<div class="jumbotron jumbotron-extend">
	<div class="container text-light">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card mt-3 card-style">
              <div class="card-body pt-0">
                @include('error_card_list')
                <div class="card-text">
                  <!--articleコントローラーのupdate起動-->
                  <form method="POST" action="{{ route('articles.update', ['article' => $article]) }}">
                    @method('PATCH')
                    @include('articles.form')
                      <button type="submit"
                      class="btn btn-dark mx-auto btn-block btn-gradient">
                        更新する
                      </button>
                      <button onclick="location.href='/index'"
                      class="btn btn-dark mx-auto btn-block btn-gradient">
                        記事一覧へ戻る
                      </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection