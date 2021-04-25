@extends('app')

@section('title', '記事更新')

@include('nav')

@section('content')
<body>
<div class="jumbotron_all jumbotron-extend">
	<div class="container text-light">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card mt-3" style="background: linear-gradient(-135deg, #000000, #009966)">
              <div class="card-body pt-0">
                @include('error_card_list')
                <div class="card-text">
                  <form method="POST" action="{{ route('articles.update', ['article' => $article]) }}">
                    @method('PATCH')
                    @include('articles.form')
                      <button type="submit" class="btn btn-dark mx-auto btn-block"
                      style="padding-bottom: 31px; font-size:15px; width:210px; height: 40px; margin:10px;">
                        更新する
                      </button>
                      <button onclick="location.href='/index'" class="btn btn-dark mx-auto btn-block"
                      style="padding-bottom: 31px; font-size:15px; width:210px; height: 40px; margin:10px;">
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