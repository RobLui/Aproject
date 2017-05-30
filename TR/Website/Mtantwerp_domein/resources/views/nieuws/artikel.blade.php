@extends('layouts.app')

@section('content')
<title>Artikel</title>
<div class="container">

  <div class="panel panel-default">
    <h2>
      @if(count($news) > 0)
      <div class="url">&nbsp;
       @foreach($news as $n)
         <a href="{{$n->title}}" class="title">{{$n->title}}</a>
       @endforeach
      </div>
      @endif
    </h2>
  </div>
  <div class="artikel">
    <div class="slider">
      <img src="/images/slidermockup.jpg" alt="test">
    </div>
    <div class="mid_container">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi urna enim, malesuada vel porta quis, suscipit sed nisi. Aenean pharetra metus vel feugiat porta. Praesent semper massa sit amet mollis interdum. Donec eget scelerisque odio. Nam pellentesque est rhoncus,</p>
      <p>aliquet diam ut, ultrices erat. Nam justo urna, condimentum non gravida eget, dictum vitae leo. Cras porta molestie lectus at efficitur. Maecenas vel erat et sapien tristique iaculis eu et quam. Praesent non porttitor augue.</p>
      <p>Phasellus eget luctus tellus, at sagittis sapien. In viverra massa quis tortor blandit bibendum. Aliquam porttitor posuere pulvinar. Nam varius ornare neque blandit scelerisque. Nulla turpis metus, luctus sit amet tincidunt sed, fermentum eget arcu. Duis tellus lectus, molestie vitae gravida vel, dictum ac nisi. Nam dictum porta orci in facilisis.</p>
    </div>
  </div>
</div>

@endsection
