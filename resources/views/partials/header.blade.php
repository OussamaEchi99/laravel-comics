<header>
    <div class="container header">
        <div class="image">
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
        </div>
        <div class="nav">
            <ul>
                @foreach ($header_links as $header_link)
                    <li class="{{ Request::route()->getName() === $header_link['url'] ? 'current' : '' }}">
                        <a href="{{ route($header_link['url']) }}">{{ $header_link['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>