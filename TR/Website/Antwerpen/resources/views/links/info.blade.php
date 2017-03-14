@extends('layouts.app')

@section('content')
<title>Info</title>

    <div class="container">
      @include("common.messages")
      <ul class="richtingen_class">
        @if(count($richtingen) > 0)
          @foreach($richtingen as $richting)
            <li><a href="{{$richting->url}}">{{$richting->title}}</a></li>
          @endforeach
        @endif
      </ul>
      @if(isset(Auth::user()->name))
        @if(Auth::user()->name == "Admin")
          @include('richtingen.add')
        @endif
      @endif
    </div>

@endsection
