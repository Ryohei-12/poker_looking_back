<!--ナビバー-->
<nav class="navbar navbar-expand navbar-dark nav-color">

  <a class="navbar-brand d-flex align-items-center" href="/main">
    <img src="{{ asset('/storage/img/logo.png') }}" alt="">
    Poker looking back
  </a>

  <ul class="navbar-nav ml-auto align-items-center">

  <!--未ログインユーザーの来訪なら表示-->
	@guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a>
    </li>
	@endguest

  <!--未ログインユーザーの来訪なら表示-->
	@guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">ログイン</a>
    </li>
	@endguest

  <!--ログイン済ユーザーの来訪なら表示-->
	@auth
    <li class="nav-item">
      <a class="nav-link" href="{{ route('articles.create') }}">+
        <i class="fas fa-pen"></i>
      </a>
    </li>
	@endauth

  <!--ログイン済ユーザーの来訪なら表示-->
	@auth
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle d-flex align-items-center" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <?php $user = Auth::user(); ?>
        @if ($user->icon_images)
  				<img class="round-img-nav mr-1" src="{{ Storage::disk('s3')->url(Auth::user()->icon_images) }}"/>
        @else
          <i class="fas fa-user-circle fa-2x"></i>
    		@endif
        <?php $user = Auth::user(); ?>{{ $user->name }}
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button" onclick="location.href='{{ route("users.show", ["user" => Auth::user()->id]) }}'">
          マイページ
        </button>
        <div class="dropdown-divider"></div>
        <button class="dropdown-item" type="button" onclick="location.href='{{ route("users.edit", ['user' => Auth::user()->id]) }}'">
          プロフィール編集
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{ route('logout') }}">
		@csrf
	</form>
    <!-- Dropdown終了 -->
	@endauth

  </ul>

</nav>
