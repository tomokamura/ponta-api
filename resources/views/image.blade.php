<h1>Image List</h1>

<ul>
    @foreach ($images as $image)
        <li>
            <img src="{{ asset($image->url) }}" alt="{{ $image->name }}" width="200">
        </li>
    @endforeach
</ul>
