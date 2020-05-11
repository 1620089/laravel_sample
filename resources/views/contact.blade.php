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


@section('Content')
  <h1>お問い合わせ</h1>
  {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
      {{Form::label('name', 'お名前')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'お名前'])}}
    </div>
    <div class="form-group">
      {{Form::label('email', 'メールアドレス')}}
      {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'メールアドレス'])}}
    </div>
    <div class="form-group">
      {{Form::label('message', 'メッセージ')}}
      {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'メッセージ'])}}
    </div>
    <div>
      {{Form::submit('送 信', ['class'=> 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}
@endsection
</body>
</html>