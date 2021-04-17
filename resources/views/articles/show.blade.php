@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <div class="container">
  <button onclick="location.href='/index'">記事一覧へ戻る</button>
    @include('articles.card')
  </div>
@endsection