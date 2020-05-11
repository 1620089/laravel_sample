<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>larabasicweb</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

  	@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
      <div class="container">
        <h1>私のWEBサイトへ<br>ようこそ!</h1>
      </div>
    </div>
    <div>
      <h2 class="text-center">来てくれてありがとう！</h2><br>
    </div>
@endsection
</body>
</html>