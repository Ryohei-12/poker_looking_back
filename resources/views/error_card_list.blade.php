<!--エラーカード-->

<!--エラーが発生したら適するメッセージを選んで表示-->
@if ($errors->any())
  <div class="card-text text-left alert alert-danger">
    <ul class="mb-0">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif