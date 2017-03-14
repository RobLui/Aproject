
<div class="col-md-4 col-md-offset-4">
  <div class="panel panel-default">
    <div class="panel-heading x">Voeg een richting toe</div>
      <div class="panel-content">
        <form action="{{ url('richtingen/add') }}" method="POST" class="form-horizontal">
          {{ csrf_field() }}
          <!-- article title -->
          <div class="form-group">
            <label for="titel" class="col-sm-3 control-label">Title</label>
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

          <!-- Add richtingen Button -->
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
              <button type="submit" class="btn btn-default">
                  <i class="fa fa-plus"></i> Add richting
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
