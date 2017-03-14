@extends('layouts.app')

@section('content')
<title>Info</title>

@if(isset(Auth::user()->name))
  @if(Auth::user()->name == "Admin")
    <div class="container">
      @include("common.messages")
      @include('richtingen.add')
    </div>
  @endif
@endif

@endsection
