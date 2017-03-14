@extends('layouts.app')

@section('content')
<title>Nieuws</title>
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      @include("common.messages")
      <div class="panel panel-default">
        <div class="panel-heading">Nieuws</div>
        <div class="panel-content">
          <form action="/event/add" method="post">
            <button type="submit" name="button" class="x">test toevoegen</button>
            {{ csrf_field() }}
          </form>
          <ul class="article-overview">
            @if(count($events) > 0)
              @foreach($events as $event)
                 <li>
                   <tr>
                    <th>
                      <div class="testClass">
                       <div class="url">&nbsp;
                         <a href="#" class="urlTitle">{{$event->title}}</a>
                           <p>
                             {{$event->text}}
                          </p>
                         @if(isset(Auth::user()->name))
                            @if(Auth::user()->name == $event->posted_by)
                              <a href="article/edit/{{$event->id}}" class="btn btn-primary btn-xs edit-btn">edit</a>
                            @endif
                          @endif
                      </div>
                    </div>
                  </th>
                 </tr>
                </li>
              @endforeach
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
