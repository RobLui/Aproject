@extends('layouts.app')

@section('content')
    <title>Artikel</title>
    <div class="container">
        <div class="panel panel-default">
            <div class="artikel">
                <div class="block_img">
                    <img src="/uploads/{{ $news->data }}" alt="{{ $news->data }}">
                    <div class="mid_container">
                        @if(count($news) > 0)
                            <div class="news_title">
                                <h3>{{ $news->title }}</h3>
                            </div>
                        @endif
                        <p>{{ $news->text }}</p>
                    </div>
                    <div class="link_back">
                        <a href="/nieuws">← Terug naar alle artikels en evenementen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
