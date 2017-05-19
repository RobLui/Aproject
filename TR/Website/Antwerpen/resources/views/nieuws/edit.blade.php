@extends('layouts.app')

@section('content')
<div class="col-md-5">
  <!--DELETE BUTTON  -->
  <a href="/../nieuws">← Terug naar nieuws</a>
    <br><br>
      <div class="panel panel-default">
        <div class="panel-heading aanpassen">Aanpassen
          <!--  Delete article button -->
          <a href="../delete/{{$events->id}}" class="btn btn-danger btn-xs pull-right" id="first_del" name="first_del">
            <i class="fa fa-btn fa-trash"></i> delete nieuws</a>
        </div>
        <br>
          <div class="panel-content">

          <!-- display errors and messages -->
          @include("common.errors")
          @include("common.messages")

          <!-- Edit -->
          {!! Form::open(array('url'=>'nieuws/edit/' . $events->id,'method'=>'POST', 'files'=>true, 'class'=>'form-horizontal')) !!}

          {{ csrf_field() }}

          <!-- TITEL -->
          <div class="form-group">
            <label for="titel" class="col-sm-3 control-label">Titel (max 255 chars)</label>
            <div class="col-sm-6">
                <input type="text" name="title" id="title" class="form-control" value="{{$events->title}}">
            </div>
          </div>

          <!-- TEXT -->
          <div class="form-group">
            <label for="url" class="col-sm-3 control-label">Text</label>
            <div class="col-sm-6">
                <input type="text" name="text" id="text" class="form-control" value="{{$events->text}}">
            </div>
          </div>

          <!-- IMAGE FILE -->
          <div class="form-group">
            <label for="data" class="col-sm-3 control-label">Afbeelding</label>
            <div class="col-sm-6">
                <input type="file" name="data" id="data" class="form-control" value="uploads/{{$events->data}}">
            </div>
          </div>

          <!-- EDIT SUBMIT-->
          <div class="form-group">
              <div class="col-sm-offset-3 col-sm-6">
                  <button type="submit" class="btn btn-default">
                      <i class="fa fa-plus"></i> Edit nieuws
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </button>
              </div>
          </div>

        {!! Form::close() !!}

          </div>
        </div>
      </div>
@endsection
