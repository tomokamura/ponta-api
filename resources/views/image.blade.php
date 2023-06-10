<h1>画像一覧</h1>
<h2>使い方</h2>
<ul>
  <li>下記URLにGETリクエストを送ると、ランダムなぽんたの画像のURLを取得できます。</li>
  <li>リクエスト先：GET<a href="https://ponta-api-git-main-tomokamura.vercel.app/api/api/image/random">https://ponta-api-git-main-tomokamura.vercel.app/api/api/image/random</a></li>
  <li>レスポンスの例: {"id":1,"url":"example.jpg"}</li>

</ul>
<ul style="display:flex;flex-wrap:wrap">
    @foreach ($images as $image)
        <li>
            <p>ID {{ $image->id }}</p>
            <img src="{{ asset($image->url) }}" alt="{{ $image->name }}" width="200" style="padding:10px">
        </li>
    @endforeach
</ul>
<a href="/">戻る</a>

