<!--オープンポジション選択画面-->
@extends('app')

@section('title', 'choose open position')
	@include('nav')

	<body>
		<div class="jumbotron_all jumbotron-extend">
			<div class="container text-center text-light">

				<h1 style="padding-top:10px; margin-bottom:30px">Open Range</h1>

				<h4>ポジション選択</h4>
				<button class="btn btn-dark" style="background: linear-gradient(-135deg, #000000, #009966); font-size:20px; width:250px; height: 60px; margin:10px" onclick="location.href='/range/openrange/utg'">UTG</button><br />
				<button class="btn btn-dark" style="background: linear-gradient(-135deg, #000000, #009966); font-size:20px; width:250px; height: 60px; margin:10px" onclick="location.href='/range/openrange/hj'">HJ</button><br />
				<button class="btn btn-dark" style="background: linear-gradient(-135deg, #000000, #009966); font-size:20px; width:250px; height: 60px; margin:10px" onclick="location.href='/range/openrange/co'">CO</button><br />
				<button class="btn btn-dark" style="background: linear-gradient(-135deg, #000000, #009966); font-size:20px; width:250px; height: 60px; margin:10px" onclick="location.href='/range/openrange/btn'">BTN</button><br />
				<button class="btn btn-dark" style="background: linear-gradient(-135deg, #000000, #009966); font-size:20px; width:250px; height: 60px; margin:10px" onclick="location.href='/range/openrange/sb'">SB</button><br />
			
				<button class="btn btn-dark" style="background: linear-gradient(-135deg, #000000, #009966); font-size:14px; width:210px; height: 40px; margin:40px; padding-bottom: 32px;" onclick="location.href='/range'">
				シチュエーション選択
				</button>
	
			</div>
		</div>
	</body>