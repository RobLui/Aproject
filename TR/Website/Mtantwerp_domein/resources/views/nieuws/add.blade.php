@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a href="..\nieuws">← Terug naar nieuws</a>
                <br><br>
                <div class="panel panel-default">
                    <div class="panel-heading">Nieuws & Events</div>
                    <div class="panel-content">

                        <!--  display errors and messages -->
                    @include("common.errors")
                    @include("common.messages")

                    <!-- CREATE -->
                    {!! Form::open(array('url'=>'nieuws/add/nieuw','method'=>'POST', 'files'=>true, 'class'=>'form-horizontal')) !!}

                    <!--  Token field -->
                    {{ csrf_field() }}

                    <!-- TITLE -->
                        <div class="form-group">
                            <label for="titel" class="col-sm-3 control-label">Titel ( max 255 karakters)</label>
                            <div class="col-sm-6">
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                        </div>

                        <!-- TEXT -->
                        <div class="form-group">
                            <label for="text" class="col-sm-3 control-label">Tekst</label>
                            <div class="col-sm-6">
                                <input type="text" name="text" id="text" class="form-control">
                            </div>
                        </div>

                        <!-- IMG -->
                        <div class="form-group">
                            <label for="data" class="col-sm-3 control-label">Afbeelding</label>
                            <div class="col-sm-6">
                                <input type="file" name="data" id="data" class="form-control">
                            </div>
                        </div>

                        <!-- CHECKBOX -->
                        @if(isset(Auth::user()->name))
                            @if(Auth::user()->name == "Admin")
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-6">
                                        <label class="btn btn-primary">
                                            <input type="checkbox" checked autocomplete="off" name="checkbox" id="checkbox"> Toestaan
                                        </label>
                                    </div>
                                </div>
                            @endif
                        @endif

                    <!-- SUBMIT -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i> Toevoegen
                                </button>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
