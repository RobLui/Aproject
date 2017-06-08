@extends('layouts.app')

@section('content')

<title>Richtingen</title>

<div class="container">
  <section class="main">
    <div class="mainContainer">
      <div class="panel panel-default">
        <h2>Studieaanbod</h2>
      </div>

      <!--  Messages & Errors-->
      @include("common.messages")
      @include("common.errors")

      <!--  TOEVOEGEN -->
      @if(isset(Auth::user()->name))
        @if(Auth::user()->name == "Admin")
          @include('richtingen.add')
        @endif
      @endif

      <!--  WEERGAVE RICHTINGEN -->
      @if(count($richtingen) > 0)
        @foreach($richtingen as $richting)
        <div class="richtingen">
          <div class="col-sm-4 item">
                <h1><a href="{{$richting->url}}" target="_blank">{{$richting->title}} </h1>
                  <img src="http://www.robbert.luit.mtantwerp.eu/public/uploads/{{$richting->afbeelding}}" alt="{{$richting->afbeelding}}" class="img-responsive">
                </a>
              @if(isset(Auth::user()->name))
                @if(Auth::user()->name == "Admin")
                <div class="block_">
                 <p><a href="studieaanbod/edit/{{$richting->id}}" class="btn btn-primary btn-xs edit-btn">aanpassen</a></p>
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
