<!--投稿編集ページ-->
@extends('app')

@section('title', 'edit profile')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/users/edit.css') }}">
@endsection

@section('content')
  @include('nav')
  <div class="jumbotron jumbotron-extend jumbotron-height">
  <div class="container text-light">
    <div class="container">
      <div class="flex-row">
        <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
          <h1 class="text-center mb-5 align-items-center">
            プロフィール編集
          </h1>
          <div class="card mt-3 card-style">
            <div class="card-body">
              
              @include('error_card_list')

              <!--プロフィール編集フォーム-->
              <div class="card-text text-light">
                <form enctype="multipart/form-data" method="POST" action="{{ route('users.update', ['user' => $user]) }}">
				@method('PATCH')
                  @csrf
				  	<input type="hidden" name="id" value="{{ $user->id }}" />
					    <div class="form-group">
            		<label for="icon_images" class="mb-2">アイコン</label><br>
							    @if ($user->icon_images)
                    <p>
                      <img class="round-img" src="{{ asset('storage/user_images/' . $user->icon_images) }}" alt="icon" />
                    </p>
                  @endif
						<input type="file" name="icon_images"  value="{{ old('icon_images',$user->id) }}" accept="image/jpeg,image/gif,image/png" />
        			</div>
					<div class="md-form text-text-light">
						<label for="name" class="text-light mt-2">ユーザー名</label>
						<input class="form-control text-light" type="text" name="name" value="{{ old('name',$user->name) }}">
						<small>3〜16文字</small>
					</div>
					<div class="md-form">
						<label for="email" class="text-light mt-2">メールアドレス</label>
						<input class="form-control text-light" type="text" id="email" name="email" value="{{ old('email',$user->email) }}" >
					</div>
					<button class="btn btn-block mt-2 mb-2 text-light btn-style"
					type="submit">
						変更する
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
@endsection