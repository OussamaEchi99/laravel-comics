@foreach ($comics_array as $comic)
    <a href="{{ route('comic', ['id' => $comic['id']]) }}" class="product">
        
            <div class="image">
                <img src="{{ $comic['thumb'] }}" alt="">
            </div>
            <span>{{ $comic['title'] }}</span>
    </a>
@endforeach
