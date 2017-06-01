@extends('layouts.app')

@section('content')
<title>Nieuws</title>

<div class="container">

  <div class="row">
    @include("common.messages")
    <div class="panel panel-default">
      <h2>Nieuws &amp Evenementen</h2>
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
      <div class="nieuws">
        <div class="col-sm-4 item">
          <div class="newz">
            <div class="block_img">
              <img src="/uploads/{{$event->data}}" alt="{{$event->data}}">
              <h1>{{$event->title}}</h1>
              <p>{{$event->text}}</p>
              <a href="/nieuws/artikel/{{$event->id}}" target="_blank" class="btn-custom"> + meer lezen </a>
              @if(isset(Auth::user()->name))
                @if(Auth::user()->name == $event->posted_by)
                  <a href="nieuws/edit/{{$event->id}}" class="btn btn-primary btn-xs edit-btn">edit</a>
                @endif
              @endif
            </div>
          </div>
        </div>
      </div>
      @endforeach
    @endif

    @if(count($data) > 0)
    <?php $i = 0; ?>
      @foreach($data as $s)
      <div class="nieuws">
        <div class="col-sm-4 item">
          <div class="newz">
            <div class="block_img">
              <img src='{{$data[$i]["snippets"][0]["body"]["file"][0]["src"]}}' alt="image">
              <h1>{{$data[$i]["title"]}}</h1>
              <?= $data[$i]["snippets"][1]["body"]["text"]?> <!--  Dit moet zo gedaan worden want met blade stuff displayed hij de <p> tags nog...-->
              <div class="btn-section_">
                <a href="https://www.gate15.be/nl/nieuws/{{$data[$i]["slug"]}}" target="_blank" class="btn-custom"> + meer lezen </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $i++; ?>
      @endforeach
    @endif
  </div>
</div>

@endsection
