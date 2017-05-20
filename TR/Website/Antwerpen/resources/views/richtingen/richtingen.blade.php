@extends('layouts.app')

@section('content')

<title>Richtingen</title>


<div class="container">
    <section class="main">
      <div class="mainContainer">
        <div class="panel panel-default">
          <h2>Richtingen</h2>
        </div>
        @include("common.messages")
        @if(isset(Auth::user()->name))
          @if(Auth::user()->name == "Admin")
            @include('richtingen.add')
          @endif
        @endif
          @if(count($richtingen) > 0)
            @foreach($richtingen as $richting)
            <div class="col-sm-4 item">
            <div class="block_img">
              <h1><a href="{{$richting->url}}" target="_blank">{{$richting->title}} </a></h1>
                <img src="/uploads/{{$richting->afbeelding}}" alt="{{$richting->afbeelding}}">
              @if(isset(Auth::user()->name))
                @if(Auth::user()->name == "Admin")
                <div class="block_">
                 <p><a href="studieaanbod/edit/{{$richting->id}}" class="btn btn-primary btn-xs edit-btn">aanpassen</a>
                 </p>
               </div>
                @endif
              @endif
            </div>
          </div>
            @endforeach
          @endif
    </div>
  </div>
</div>

@endsection
