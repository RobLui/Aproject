@extends('layouts.app')

@section('content')
<title>Artikel</title>
<div class="container">

  <div class="panel panel-default">

  @if(count($news) > 0)
  <div class="news_title">
     <h2>{{$news->title}}</h2>
  </div>
  @endif

  <div class="artikel">
    <div class="block_img">
      <img src="/uploads/{{$news->data}}" alt="{{$news->data}}">
      <div class="mid_container">
        <p>{{$news->text}}</p>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
