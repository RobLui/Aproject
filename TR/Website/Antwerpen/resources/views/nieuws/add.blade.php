@extends('layouts.app')

@section('content')
<!-- Bootstrap Boilerplate... -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <a href="..\nieuws">← terug naar nieuws</a>
          <br><br>
            <div class="panel panel-default">
              <div class="panel-heading">Voeg Nieuws/Events toe</div>
              <br>
                <div class="panel-content">
                <!--  display errors and messages -->
                @include("common.errors")
                @include("common.messages")
                <!-- New article Form - /add wordt achter de link bijgevoegd -->
                <form action="{{ url('nieuws/add/nieuw') }}" method="POST" class="form-horizontal">
                  {{ csrf_field() }}

                  <!-- article title -->
                  <div class="form-group">
                    <label for="titel" class="col-sm-3 control-label">Titel (max 255 karakters)</label>
                    <div class="col-sm-6">
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                  </div>

                  <!-- URL -->
                  <!-- <div class="form-group">
                    <label for="url" class="col-sm-3 control-label">URL</label>
                    <div class="col-sm-6">
                        <input type="text" name="url" id="url" class="form-control">
                    </div>
                  </div> -->

                  <!--  Text news/event -->
                  <div class="form-group">
                    <label for="text" class="col-sm-3 control-label">Tekst</label>
                    <div class="col-sm-6">
                        <input type="text" name="text" id="text" class="form-control">
                    </div>
                  </div>

                <!-- Add article Button -->
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Toevoegen
                    </button>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection