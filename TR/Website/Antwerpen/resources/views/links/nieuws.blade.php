@extends('layouts.app')

@section('content')
<title>Nieuws</title>
<div class="container">
  <div class="row">
      @include("common.messages")
      <div class="panel panel-default">
        <div class="panel-heading">Nieuws</div>
        <div class="panel-content">
          <form action="/event/add" method="post">
            <button type="submit" name="button" class="x">test toevoegen</button><br>
            {{ csrf_field() }}
          </form>
            @if(count($events) > 0)
              @foreach($events as $event)
              <div class="rowX">
                  <h3>{{$event->title}}</h3>
                  <p>{{$event->text}}</p>
                  @if(isset(Auth::user()->name))
                    @if(Auth::user()->name == $event->posted_by)
                      <a href="article/edit/{{$event->id}}" class="btn btn-primary btn-xs edit-btn">edit</a>
                    @endif
                  @endif
              </div>
              @endforeach
            @endif
        </div>
  </div>
</div>


@endsection
