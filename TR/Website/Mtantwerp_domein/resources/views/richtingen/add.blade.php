<div class="richtingen_center">
    <div class="panel panel-default">
        <div class="panel-heading x">
            Toevoegen
        </div>

        <div class="panel-content">
            <!-- CREATE -->
        {!! Form::open(array('url'=>'/info/studieaanbod/add','method'=>'POST', 'files'=>true, 'class'=>'form-horizontal')) !!}

        {{ csrf_field() }}

        <!-- richtingen title -->
            <div class="form-group">
                <label for="titel" class="col-sm-3 control-label">Titel</label>
                <div class="col-sm-6">
                    <input type="text" name="title" id="title" class="form-control">
                </div>
            </div>

            <!-- richtingen url -->
            <div class="form-group">
                <label for="url" class="col-sm-3 control-label">URL</label>
                <div class="col-sm-6">
                    <input type="text" name="url" id="url" class="form-control">
                </div>
            </div>

            <!-- AFBEELDING -->
            <div class="form-group">
                <label for="afbeelding" class="col-sm-3 control-label">Afbeelding</label>
                <div class="col-sm-6">
                    <input type="file" name="afbeelding" id="afbeelding" class="form-control">
                </div>
            </div>

            <!-- Add richtingen button -->
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
