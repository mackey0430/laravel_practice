<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
  トップ画面
  <a href="{{url('/news')}}">open</a>
  <form action="/news" method="post">
    @csrf
    <div class="text_form">
      <input type="text" name="user" value="入力しよう">
    </div>
    <div class="submit">
      <button type="submit" name="button001">POST</button>
    </div>
  </form>
</body>
</html>