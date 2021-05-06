<!--パスワード再設定画面-->

@extends('app')

@section('title', 'パスワード再設定')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/auth/passwords/reset.css') }}">
@endsection

@section('content')
<div class="jumbotron jumbotron-extend jumbotron-height">
  <div class="container text-light">
    <div class="container">
      <div class="row">
        <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
          <h1 class="text-center mt-4"><a class="text-light" href="/">Poker looking back</a></h1>
          <div class="card mt-3 card-style">
            <div class="card-body text-center">
              <h2 class="h3 card-title text-center mt-2">新しいパスワードを設定</h2>

              @include('error_card_list')

              <div class="card-text">
                <form method="POST" action="{{ route('password.update') }}">
                  @csrf

                  <input type="hidden" name="email" value="{{ $email }}">
                  <input type="hidden" name="token" value="{{ $token }}">

                  <div class="md-form">
                    <label for="password">新しいパスワード</label>
                    <input class="form-control" type="password" id="password" name="password" required>
                  </div>

                  <div class="md-form">
                    <label for="password_confirmation">新しいパスワード(再入力)</label>
                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                  </div>

                  <button class="btn btn-block mt-2 mb-2 text-light btn-gradient" type="submit">送信</button>

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