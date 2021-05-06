<!--パスワード再設定用emailアドレス識別画面-->
@extends('app')

@section('title', 'reset pass')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/auth/passwords/email.css') }}">
@endsection

@section('content')

<div class="jumbotron jumbotron-extend jumbotron-height">
  <div class="container text-light">
    <div class="container">
      <div class="row">
        <div class="mx-auto mt-3 col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
          <h1 class="text-center">
            <a class="text-light" href="/">
              Poker looking back
            </a>
          </h1>
          <div class="card mt-3 card-style">
            <div class="card-body text-center">
              <h2 class="h3 card-title text-center mt-2">パスワード再設定</h2>

              @include('error_card_list')

              <!--パスワード変更用メール送信のメッセージ-->
              @if (session('status'))
                <div class="card-text alert alert-success">
                  {{ session('status') }}
                </div>
              @endif

              <!--メール送信先アドレス入力-->
              <div class="card-text">
                <form method="POST" action="{{ route('password.email') }}">
                  @csrf
                  <div class="md-form">
                    <label for="email">メールアドレス</label>
                    <input class="form-control" type="text" id="email" name="email" required>
                  </div>

                  <button
                  class="btn btn-block mt-2 mb-2 text-light btn-gradient"
                  type="submit">
                    メール送信
                  </button>

                </form>

                <div class="mt-4 text-center">
                  <a href='/login' class="card-text text-light">ログインページに戻る</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection