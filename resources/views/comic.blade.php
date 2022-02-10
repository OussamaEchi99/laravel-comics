@extends('layouts.app')

{{-- @section('main_classes')
primary-color-background
@endsection --}}

@section('main_content')
    <section class="pasta-details">
        <div class="container">
            <h2>{{ $comic_info['title'] }}</h2>

            <div>
                <img src="{{ $comic_info['thumb'] }}" alt="">
            </div>

            <p>{{ $comic_info['description'] }}</p>
        </div>
    </section>
@endsection