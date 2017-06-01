@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-5">        <!--DELETE BUTTON  -->
        <a href="/public/info/studieaanbod">← Terug naar studieaanbod</a>
          <br><br>
            <div class="panel panel-default">
              <div class="panel-heading aanpassen">Aanpassen
                <!--  Delete article button -->
                <a href="../delete/{{$richtingen->id}}" class="btn btn-danger btn-xs pull-right" id="first_del" name="first_del">
                  <i class="fa fa-btn fa-trash"></i> delete richting</a>
              </div>
              <br>
          <div class="panel-content">

            <!-- ERRORS & MESSAGES -->
            @include("common.errors")
            @include("common.messages")

            <!-- EDIT -->
            {!! Form::open(array('url'=>'info/studieaanbod/edit/' . $richtingen->id,'method'=>'POST', 'files'=>true, 'class'=>'form-horizontal')) !!}

            <!-- TOKEN -->
            {{ csrf_field() }}

            <!-- TITEL -->
            <div class="form-group">
              <label for="titel" class="col-sm-3 control-label">Title (max 255 karakters)</label>
              <div class="col-sm-6">
                  <input type="text" name="title" id="title" class="form-control" value="{{$richtingen->title}}">
              </div>
            </div>

            <!-- URL -->
            <div class="form-group">
              <label for="url" class="col-sm-3 control-label">URL</label>
              <div class="col-sm-6">
                  <input type="text" name="url" id="url" class="form-control" value="{{$richtingen->url}}">
              </div>
            </div>

            <!-- AFBEELDING -->
            <div class="form-group">
              <label for="afbeelding" class="col-sm-3 control-label">Afbeelding</label>
              <div class="col-sm-6">
                <input type="file" name="afbeelding" id="afbeelding" class="form-control" value="{{$richtingen->afbeelding}}">
              </div>
            </div>

            <!-- RICHTINGEN EDIT SUBMIT -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Edit Richting
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
