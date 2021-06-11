<!--オープンポジション選択画面-->
@extends('app')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/handranges/openrange.css') }}">
@endsection

@section('title', 'choose open position')
	@include('nav')

@section('content')
	<body>
		<div class="jumbotron jumbotron-extend jumbotron-height">
			<div class="container text-center text-light">
			
				<div id="app">
  					<></>
				</div>

				<button class="btn btn-dark back-btn" onclick="location.href='/range'">
				シチュエーション選択に戻る
				</button>
			</div>
		</div>
	</body>
@endsection