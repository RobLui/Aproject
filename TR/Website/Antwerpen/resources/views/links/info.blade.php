@extends('layouts.app')

@section('content')
<title>Info</title>
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">Info</div>
          <div class="panel-content">
          @include("common.messages")
          <ul class="richtingen_class">
            @if(count($richtingen) > 0)
              @foreach($richtingen as $richting)
              <li><a href="{{$richting->url}}">{{$richting->title}}</a>
                @if(isset(Auth::user()->name))
                  @if(Auth::user()->name == "Admin")
                    <a href="richtingen/edit/{{$richting->id}}" class="btn btn-primary btn-xs edit-btn">edit</a>
                  @endif
                @endif
              </li>
              @endforeach
            @endif
          </ul>
          @if(isset(Auth::user()->name))
            @if(Auth::user()->name == "Admin")
              @include('richtingen.add')
            @endif
          @endif
        </div>
      </div>
      </div>
    </div>
@endsection
