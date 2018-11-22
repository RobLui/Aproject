@extends('layouts.app')

@section('content')

    <title>Admin-panel</title>

    <div class="container">
        <div class="panel panel-default">
            <h2>Admin overzicht</h2>
        </div>
        <div class="panel-content">
            <div class="one">
                <div class="_admin">
                    <a href="{{ route('news') }}">Nieuws &amp Evenementen</a>
                </div>
                <div class="_admin">
                    <a href="{{ route('study_offer') }}">Scholen &amp Richtingen</a>
                </div>
                <div class="_admin">
                    <a href="{{ route('approval') }}">Goedkeuren</a>
                </div>
            </div>
        </div>
    </div>
@endsection
