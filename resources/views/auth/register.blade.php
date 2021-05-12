<!--新規ユーザー登録画面-->
@extends('app')

@section('title', 'sign up')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/auth/register.css') }}">
@endsection

@section('content')

<div class="jumbotron jumbotron-extend jumbotron-height">
  <div class="container text-light">
    <div class="container">
      <div class="flex-row">
        <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
          <h1 class="text-center d-flex mb-5 align-items-center">
            <a class="text-light" href="/">
              <img src="{{ asset('img/logo.png') }}" alt="">
              Poker looking back
            </a>
          </h1>
          <div class="card mt-3 card-style">
            <div class="card-body">
              <h2 class="h3 card-title text-light text-center mt-2">ユーザー登録</h2>

              @include('error_card_list')

              <!--新規登録フォーム-->
              <div class="card-text text-light">
                <form enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
                  @csrf
                    <label for="icon_images" class="mt-3 text-light text-left">
                      <p class="mb-2">アイコン</p>
                      <input class="form-control-file" type="file" name="icon_images" id="icon_images" value="{{ old('icon_images') }}" accept="image/jpeg,image/gif,image/png" />
                    </label>
                  <div class="md-form text-light">
                    <label for="name" class="text-light">ユーザー名</label>
                    <input class="form-control text-light" type="text" id="name" name="name" value="{{ old('name') }}">
                    <small>3〜16文字</small>
                  </div>
                  <div class="md-form">
                    <label for="email" class="text-light">メールアドレス</label>
                    <input class="form-control text-light" type="text" id="email" name="email" value="{{ old('email') }}" >
                  </div>
                  <div class="md-form">
                    <label for="password" class="text-light">パスワード</label>
                    <input class="form-control text-light" type="password" id="password" name="password">
                    <small>英数字8文字以上</small>
                  </div>
                  <div class="md-form">
                    <label for="password_confirmation" class="text-light">パスワード(確認)</label>
                    <input class="form-control text-light" type="password" id="password_confirmation" name="password_confirmation">
                  </div>
                  <button class="btn btn-block mt-2 mb-2 text-light btn-style"
                  type="submit">
                    ユーザー登録
                  </button>
                </form>

                <div class="mt-0 text-center">
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
