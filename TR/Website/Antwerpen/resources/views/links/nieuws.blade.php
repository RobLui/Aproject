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
          <ul class="article-overview">
            @if(count($events) > 0)
              @foreach($events as $event)
                 <li>
                   <tr>
                    <th>
                     <div class="url">&nbsp;
                       <a href="{{$event->url}}" class="urlTitle">{{$event->title}}</a>
                        @if(isset(Auth::user()->name))
                          @if(Auth::user()->name == $event->posted_by)
                            <a href="article/edit/{{$event->id}}" class="btn btn-primary btn-xs edit-btn">edit</a>
                          @endif
                        @endif
                     </div>
                     <div class="info">&nbsp;&nbsp;&nbsp;&nbsp;
                       Posted by
                       @if(isset($event->posted_by))
                        {{{$event->posted_by}}}
                        <?php $i = 0; ?>
                        @foreach($comments as $comment)
                          @if($comment->post_id == $event->id)
                            <?php ++$i; ?>
                          @endif
                        @endforeach
                        | <a href="comments/{{$event->id}}">{{$i}}
                          @if( $i == 0 || $i > 1 )
                           comments
                          @else
                           comment
                          @endif
                          </a>
                     @else not set @endif
                   </div>
                  </th>
                 </tr>
               </li>
            @endforeach
          </ul>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
