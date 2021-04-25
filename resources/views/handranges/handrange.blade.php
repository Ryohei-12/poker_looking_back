@extends('app')

@section('title', 'ハンドレンジ表')
	@include('nav')

	<body>
		<div class="jumbotron_all jumbotron-extend" style="height: 100vh;">
			<div class="container text-center text-light">

				<h1 style="padding-top:10px; margin-bottom:30px">Hand Range</h1>

				シチュエーションを選んでください<br/>
				<button 
				class="btn btn-dark" 
				style="background: linear-gradient(-135deg, #000000, #009966); font-size:20px; width:250px; height: 60px; margin:10px"
				onclick="location.href='/range/openrange'">
				Open Range
				</button><br />

				<button
				class="btn btn-dark"
				style="background: linear-gradient(-135deg, #000000, #009966); font-size:20px; width:250px; height: 60px; margin:10px"
				onclick="location.href='/range/commingsoon'">
				Facing A Raise
				</button><br />

				<button
				class="btn btn-dark"
				style="background: linear-gradient(-135deg, #000000, #009966); font-size:20px; width:250px; height: 60px; margin:10px"
				onclick="location.href='/range/commingsoon'">
				Facing A 3Bet
				</button><br />

				<button
				class="btn btn-dark"
				style="background: linear-gradient(-135deg, #000000, #009966); font-size:14px; width:210px; height: 40px; margin:40px; padding-bottom: 32px;"
				onclick="location.href='/main'">
				メインページに戻る
				</button>

			</div>
		</div>
	</body>