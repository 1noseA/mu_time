<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>mu_time</title>
  @yield('styles')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
  <nav class="navbar">
    <a class="navbar-brand" href="/">＃虚無タイム</a>
    <div class="navbar-control">
      <a class="nav-item mr-3" href="#">投稿一覧</a>
      @if(Auth::check())
        <a class="nav-item mr-3" href="#">投稿する</a>
        <a class="nav-item mr-3" href="#">マイページ</a>
        <a class="nav-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          ログアウト
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      @else
        <a class="nav-item mr-3" href="{{ route('login') }}">ログイン</a>
        <a class="nav-item mr-3" href="{{ route('register') }}">会員登録</a>
      @endif
    </div>
  </nav>
</header>
<main>
  @yield('content')
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
<footer class="text-center">
  <a href="/">kyomu</a>
</footer>
</html>