<!--ログインページ-->
@extends('app')

@section('title', 'login')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/auth/login.css') }}">
@endsection

@section('content')

<div class="jumbotron jumbotron-extend jumbotron-height">
  <div class="container text-light">
    <div class="container">
      <div class="row">
        <div class="mx-auto mt-3 col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
          <h1 class="text-center"><a class="text-light" href="/">Poker looking back</a></h1>
          <div class="card mt-3 card-style">
            <div class="card-body text-center">
              <h2 class="h3 card-title text-center mt-2">ログイン</h2>

              @include('error_card_list')
              
              <div class="card-text text-light">
                <!--ログインフォーム-->
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="md-form text-light">
                    <label for="email">メールアドレス</label>
                    <input class="form-control text-light" type="text" id="email" name="email" required value="{{ old('email') }}">
                  </div>

                  <div class="md-form">
                    <label for="password">パスワード</label>
                    <input class="form-control text-light" type="password" id="password" name="password" required>
                  </div>
  
                  <input type="hidden" name="remember" id="remember" value="on">
                  
                  <div class="text-right mr-3">
                    <a href="{{ route('password.request') }}" class="card-text text-light">
                      パスワードを忘れた方
                    </a>
                  </div>

                  <button class="btn btn-block mt-2 mb-2 text-light btn-style"
                  type="submit">
                    ログイン
                  </button>

                </form>

                <div class="mt-0">
                  <a href="{{ route('register') }}" class="card-text text-light">ユーザー登録はこちら</a>
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