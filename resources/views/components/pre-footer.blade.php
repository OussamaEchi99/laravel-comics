<div class="pre_footer">
    <div class="container">
        <ul>
            @foreach ($prefooter_links as $prefooter_link)
                <li>
                    <a href="{{ $prefooter_link['url'] }}">
                        <div class="image">
                            <img src="{{ asset('images/' . $prefooter_link['image'] ) }}" alt="">
                        </div>

                        <div>
                            <span> {{ $prefooter_link['text'] }} </span>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>