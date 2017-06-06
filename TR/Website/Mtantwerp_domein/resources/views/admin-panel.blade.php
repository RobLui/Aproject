@extends('layouts.app')

@section('content')

<title>Admin-panel</title>
<div class="container">
  <div class="panel panel-default">
    <h2>Admin</h2>
  </div>
  <div class="panel-content">
    <div class="mid_container">

      <div class="one">
        <div class="_admin">
          <a href="http://www.robbert.luit.mtantwerp.eu/public/nieuws">Nieuws &amp Evenementen</a>
        </div>
        <div class="_admin">
          <a href="http://www.robbert.luit.mtantwerp.eu/public/info/studieaanbod">School/Richtingen</a>
        </div>
      </div>

      <div class="one">
        <div class="_admin">
          <a href="http://www.robbert.luit.mtantwerp.eu/public/approval">Goedkeuren</a>
        </div>
        <div class="_admin">
          <a href="http://www.robbert.luit.mtantwerp.eu/public/info/studieaanbod">Instellingen</a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
