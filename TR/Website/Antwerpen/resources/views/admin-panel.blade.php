@extends('layouts.app')

@section('content')

<title>Admin-panel</title>
<div class="container">
  <div class="panel panel-default">
    <h2>Admin</h2>
  </div>
  <div class="panel-content">
    <div class="mid_container">
      <div class="left-sq">
        <a href="/nieuws">Nieuws &amp Evenementen</a>
      </div>
      <div class="right-sq">
        <a href="/info/studieaanbod">Richtingen</a>
      </div>
      <div class="left-sq">
        <a href="/approval">Goedkeuren</a>
      </div>
      <div class="right-sq">
        <a href="/info/studieaanbod">Suggesties</a>
      </div>
    </div>
  </div>
</div>
@endsection