@extends('layouts.app')

@section('content')
<title>Richtingen</title>
  <div class="container">
    <div class="panel panel-default">
      <h2>Richtingen</h2>
    </div>
        <div class="panel-content">
        @include("common.messages")
        <ul class="richtingen_class">
          @if(count($richtingen) > 0)
            @foreach($richtingen as $richting)
            <li>
              <a href="{{$richting->url}}">{{$richting->title}}</a>
              @if(isset(Auth::user()->name))
                @if(Auth::user()->name == "Admin")
                  <a href="studieaanbod/edit/{{$richting->id}}" class="btn btn-primary btn-xs edit-btn">edit</a>
                @endif
              @endif
            </li>
            @endforeach
          @endif
        @if(isset(Auth::user()->name))
          @if(Auth::user()->name == "Admin")
            @include('richtingen.add')
          @endif
        @endif
        </ul>
      </div>
    </div>
    </div>
  </div>
@endsection
