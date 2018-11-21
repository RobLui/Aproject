@extends('layouts.app')

@section('content')
    <title>Goedkeurpagina</title>

    <div class="allowpage">
        <div class="container">
            <div class="row">
                <!-- TOEGESTAAN -->
                <h2>Toegestaan</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Gepost door</th>
                        <th>Titel</th>
                        <th>Aangemaakt op</th>
                        <th>Aanpassen</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($nieuws) > 0)
                        @foreach($nieuws as $n)
                            @if($n->allowed == 1)
                                <tr>
                                    <!-- ID -->
                                    <th scope="row">{{$n->id}}</th>
                                    <!-- WIE -->
                                    <td>{{$n->posted_by}}</td>
                                    <!-- TITEL -->
                                    <td>{{$n->title}}</td>
                                    <!-- DATUM CREATIE -->
                                    <td>{{$n->created_at}}</td>
                                    <!--  AANPASSEN -->
                                    <td><a href="nieuws/edit/{{$n->id}}" class="btn btn-default">Pas aan</a></td>
                                </tr>
                            @endif
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- NIET TOEGESTAAN -->
                <h2>Niet Toegestaan</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Gepost door</th>
                        <th>Titel</th>
                        <th>Aangemaakt op</th>
                        <th>Aanpassen</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($nieuws) > 0)
                        @foreach($nieuws as $n)
                            @if($n->allowed == 0)
                                <tr>
                                    <!-- ID -->
                                    <th scope="row">{{$n->id}}</th>
                                    <!-- WIE -->
                                    <td>{{$n->posted_by}}</td>
                                    <!-- TITEL -->
                                    <td>{{$n->title}}</td>
                                    <!-- DATUM CREATIE -->
                                    <td>{{$n->created_at}}</td>
                                    <!--  AANPASSEN -->
                                    <td><a href="nieuws/edit/{{$n->id}}" class="btn btn-default">Pas aan</a></td>
                                </tr>
                            @endif
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
