@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 mx-auto my-5">
      <h3 class="text-center mb-3">〜{{$msg}}〜</h3>
      <p>虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無</p>
      <div class="top-text my-4">
        <p><strong>虚無感（きょむかん）</strong>とは、すべてが空しく感じること、何事にも意味や価値が感じられないような感覚、などを指す意味で用いられる表現です。たとえば、人生の意味や自分の存在意義などについて「まるで無意味なのではないか」という思いに苛まれているような状況は「虚無感にとらわれる」などと表現されます。</p>

        <p>「虚無」という言葉には「なにもない」「空っぽである」「何の意味もない」「まったくの無価値」といった意味があります。「虚無感」は、そのような（「虚無」を感じている）感覚です。</p>
        
        <p>虚無感とは具体的にはどのような感覚なのか、その様相は多分に人それぞれでしょうが、たとえば「なにか本質的な大事な部分がごっそり抜け落ちているような感覚」とか「目指すべき人生の指標が見当たらず暗中にいるような感覚」は、虚無感であるといえるでしょう。（weblio辞典）</p>
      </div>
      <p>虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無</p>
      {{-- ボタン --}}
      <div class="text-center mt-5">
        <h3>虚無を感じたらボタンを押そう！！！</h3>
        <h3 class="far fa-hand-point-down"></h3>
      
      <form name="kyomu" method="POST" action="/count">
        @csrf
          <a href="javascript:kyomu.submit()" class="btn-emergency my-4">
            <span class="btn-emergency-bottom"></span>
            <span class="btn-emergency-top"></span>
          </a>
      </form>
      {{-- <form method="POST" action="/count">
        @csrf
        <button type="submit" class="btn-emergency my-4">
          <span class="btn-emergency-bottom"></span>
          <span class="btn-emergency-top"></span>
        </button>
      </form> --}}
      <p>全ての虚無数：{{ $count_all }}虚無</p>
      <p>今日の虚無数：</p>
      <p>今週の虚無数：</p>
      <p>今月の虚無数：</p>
    </div>
      <p class="mt-5">虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無</p>
      
      <h3 class="text-center mt-3">このアプリの使い方</h3>
        <p>虚無を感じたらボタンを押そう。虚無を感じているのはあなただけじゃないよ。会員登録・ログインしたらあなたの虚無数がわかるよ。</p>
        <p>虚無を感じたらつぶやこう。みんなのつぶやきも見ることができるよ。いいね（共感）とコメントができるよ。※会員登録・ログインしてね。</p>
        <p>同じく虚無を感じている仲間を探そう。フォローできるよ。※会員登録・ログインしてね。</p>
      <p class="mt-5">虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無虚無</p>
    </div>
  </div>
</div>
@endsection
