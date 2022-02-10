@extends('layouts.app')

@section('page_title')
DC Comics
@endsection

@section('main_content')
    <section class="comics_section">
        <div class="container">

            @include('components.list-dc-comics', [
                'title' => 'Comics',
                'comics_array' => $comics
            ])

            @include('components.pre-footer', [
                'prefooter_links' => $prefooter_links
            ])

        </div>
    </section>
@endsection