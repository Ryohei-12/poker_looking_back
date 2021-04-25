@extends('app')

@section('title', 'ユーザー登録')

@section('content')
<div class="jumbotron_all jumbotron-extend" style="height: 100vh;">
  <div class="container text-light">
    <div class="container">
      <div class="row">
        <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
          <h1 class="text-center mt-3">
            <a class="text-light" href="/">
              <img src="{{ asset('img/logo.png') }}" alt="">
              Poker looking back
            </a>
          </h1>
          <div class="card mt-3" style="background: linear-gradient(-135deg, #000000, #009966);">
            <div class="card-body text-center">
              <h2 class="h3 card-title text-light text-center mt-2">ユーザー登録</h2>

              @include('error_card_list')

              <div class="card-text text-light">
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="md-form text-text-light">
                    <label for="name" class="text-light">ユーザー名</label>
                    <input class="form-control" type="text" id="name" name="name" required value="{{ old('name') }}">
                    <small>英数字3〜16文字(登録後の変更はできません)</small>
                  </div>
                  <div class="md-form">
                    <label for="email" class="text-light">メールアドレス</label>
                    <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}" >
                  </div>
                  <div class="md-form">
                    <label for="password" class="text-light">パスワード</label>
                    <input class="form-control" type="password" id="password" name="password" required>
                    <small>英数字8文字以上</small>
                  </div>
                  <div class="md-form">
                    <label for="password_confirmation" class="text-light">パスワード(確認)</label>
                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                  </div>
                  <button class="btn btn-block mt-2 mb-2 text-light" 
                  style="background: linear-gradient(135deg, #000000, #009966);"
                  type="submit">
                    ユーザー登録
                  </button>
                </form>

                <div class="mt-0">
                  <a href="{{ route('login') }}" class="card-text text-light">ログインはこちら</a>
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
