@extends('layouts.app')

@section('content')
<title>Project Antwerpen</title>
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      @include("common.messages")
      <div class="panel panel-default">
        <div class="panel-heading">Overview</div>
        <div class="panel-content">
          <ul class="article-overview">
            @if(count($articles) > 0)
              @foreach($articles as $article)
                 <li>
                   <tr>
                    <th>
                     <div class="url">&nbsp;
                       <a href="{{$article->url}}" class="urlTitle">{{$article->title}}</a>
                        @if(isset(Auth::user()->name))
                          @if(Auth::user()->name == $article->posted_by)
                            <a href="article/edit/{{$article->id}}" class="btn btn-primary btn-xs edit-btn">edit</a>
                          @endif
                        @endif
                     </div>
                     <div class="info">&nbsp;&nbsp;&nbsp;&nbsp;
                       Posted by
                       @if(isset($article->posted_by))
                        {{{$article->posted_by}}}
                        <?php $i=0; ?>
                        @foreach($comments as $comment)
                          @if($comment->post_id == $article->id)
                            <?php $i++; ?>
                          @endif
                        @endforeach
                        | <a href="comments/{{$article->id}}">{{$i}}
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
