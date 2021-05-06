<!--投稿作成ページ-->
@extends('app')

@section('title', 'post new hand review')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/articles/create.css') }}">
@endsection

@section('content')
	@include('nav')
	
<div class="jumbotron jumbotron-extend">
  <div class="container text-light">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card mt-3 mb-3 card-style">
            <div class="card-body pt-0">
              @include('error_card_list')
              <div class="card-text">
                <form method="POST" action="{{ route('articles.store') }}">
                  @include('articles.form')
                  <div class="text-center">
                    <button type="submit"
                    class="btn btn-dark btn-gradient">
                      投稿する
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection