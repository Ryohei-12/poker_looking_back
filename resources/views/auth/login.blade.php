@extends('app')

@section('title', 'ログイン')

@section('content')
<div class="jumbotron_all jumbotron-extend" style="height: 100vh;">
  <div class="container text-light">
    <div class="container">
      <div class="row">
        <div class="mx-auto mt-3 col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
          <h1 class="text-center"><a class="text-light" href="/">Poker looking back</a></h1>
          <div class="card mt-3" style="background: linear-gradient(-135deg, #000000, #009966);">
            <div class="card-body text-center">
              <h2 class="h3 card-title text-center mt-2">ログイン</h2>

              @include('error_card_list')
              
              <div class="card-text">
                <form method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="md-form">
                    <label for="email">メールアドレス</label>
                    <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
                  </div>

                  <div class="md-form">
                    <label for="password">パスワード</label>
                    <input class="form-control" type="password" id="password" name="password" required>
                  </div>
  
                  <input type="hidden" name="remember" id="remember" value="on">
                  
                  <div class="text-left">
                    <a href="{{ route('password.request') }}" class="card-text text-light">パスワードを忘れた方</a>
                  </div>

                  <button class="btn btn-block mt-2 mb-2 text-light"
                  style="background: linear-gradient(135deg, #000000, #009966);"
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