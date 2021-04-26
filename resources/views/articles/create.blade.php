<!--投稿作成ページ-->
@extends('app')

@section('title', 'post new hand review')

@section('content')
	@include('nav')
	
<div class="jumbotron_all jumbotron-extend">
  <div class="container text-light">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card mt-3 mb-3" style="background: linear-gradient(-135deg, #000000, #009966)">
            <div class="card-body pt-0">
              @include('error_card_list')
              <div class="card-text">
                <form method="POST" action="{{ route('articles.store') }}">
                  @include('articles.form')
                  <div class="text-center">
                    <button type="submit"
                    class="btn btn-dark"
                    style="background: linear-gradient(135deg, #000000, #009966); padding-bottom: 31px; font-size:15px; width:210px; height: 40px; margin:10px;">
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