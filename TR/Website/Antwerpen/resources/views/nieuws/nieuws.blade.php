@extends('layouts.app')

@section('content')
<title>Nieuws</title>

<div class="container">
  <div class="row">
    @include("common.messages")
    <div class="panel panel-default">
      <h2>Nieuws &amp Events</h2>
    </div>
  </div>

  <div class="panel-content">
    @if(isset(Auth::user()->name))
      @if(Auth::user()->name == "Admin")
      <div class="news_m">
        <a href="/nieuws/add"> Nieuws/Event toevoegen</a>
      </div>
      @endif
    @endif

    @if(count($events) > 0)
      @foreach($events as $event)
      <div class="col-sm-4 item">
      <div class="block_img">
        <img src="/uploads/{{$event->data}}" alt="{{$event->data}}">
        <h1>{{$event->title}}</h1>
        <p>{{$event->text}}</p>
        @if(isset(Auth::user()->name))
          @if(Auth::user()->name == $event->posted_by)
            <a href="nieuws/edit/{{$event->id}}" class="btn btn-primary btn-xs edit-btn">edit</a>
          @endif
        @endif
      </div>
    </div>
      @endforeach
    @endif
  </div>
</div>

@endsection
