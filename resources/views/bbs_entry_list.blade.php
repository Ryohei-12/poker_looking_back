<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>新規投稿</h2>
	<!-- 投稿フォーム -->
	@include("part.bbs_entry_form")

	<h2>記事一覧</h2>

	@foreach ($item_list as $item)
	<div class="entry">
		<h5>{{ $item->title }}</h5>
		<p>by{{ $item->author }}</p>
		<div>
			{!! nl2br($item->body) !!}
		</div>
	</div>
	@endforeach

	@if(count($item_list) < 1)
	<p>投稿がありません</p>
	@endif
</body>
</html>