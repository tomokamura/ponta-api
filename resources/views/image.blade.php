<h1>画像一覧</h1>
<h2>使い方</h2>
<ul>
  <li>"https://ponta-api-git-main-tomokamura.vercel.app/api/api/image/{ID}"にGETリクエストを送ると、ぽんたの画像のURLを取得できます。</li>
  <li>リクエストの例：<a href="https://ponta-api-git-main-tomokamura.vercel.app/api/api/image/4">https://ponta-api-git-main-tomokamura.vercel.app/api/api/image/4</a></li>
  <li>レスポンスの例: {"url":"example"}</li>
</ul>
<ul>
    @foreach ($images as $image)
        <li>
            <p>ID {{ $image->id }}</p>
            <img src="{{ asset($image->url) }}" alt="{{ $image->name }}" width="200">
        </li>
    @endforeach
</ul>
<a href="/">戻る</a>

