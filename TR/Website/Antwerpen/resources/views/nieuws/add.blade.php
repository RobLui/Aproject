@extends('layouts.app')

@section('content')
<!-- Bootstrap Boilerplate... -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <a href="..\nieuws">← Terug naar nieuws</a>
          <br><br>
            <div class="panel panel-default">
              <div class="panel-heading">Nieuws & Events</div>
              <br>
                <div class="panel-content">
                <!--  display errors and messages -->
                @include("common.errors")
                @include("common.messages")

                <!-- CREATE -->
                {!! Form::open(array('url'=>'nieuws/add/nieuw','method'=>'POST', 'files'=>true, 'class'=>'form-horizontal')) !!}

                  <!--  Token field -->
                  {{ csrf_field() }}

                  <!--Titel -->
                  <div class="form-group">
                    <label for="titel" class="col-sm-3 control-label">Titel (max 255 karakters)</label>
                    <div class="col-sm-6">
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                  </div>

                  <!-- Tekt -->
                  <div class="form-group">
                    <label for="text" class="col-sm-3 control-label">Tekst</label>
                    <div class="col-sm-6">
                        <input type="text" name="text" id="text" class="form-control">
                    </div>
                  </div>

                  <!-- Afbeelding -->
                  <div class="form-group">
                    <label for="afbeelding" class="col-sm-3 control-label">Afbeelding</label>
                    <div class="col-sm-6">
                        <input type="file" name="afbeelding" id="afbeelding" class="form-control">
                    </div>
                  </div>

                <!-- Submit -->
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Toevoegen
                    </button>
                  </div>
                </div>
                {!! Form::close() !!}

              <!-- </form> -->
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
