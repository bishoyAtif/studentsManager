<div class="card-body">
  <div class="row">
    <div class="col-lg-4">
      <div class="form-group">
        <label for="name" class="control-label">Name</label>
        {{ Form::text('name', old('name'), ['class' => 'form-control', 'id' => 'name']) }}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="description" class="control-label">Description</label>
        {{ Form::textarea('description', old('description'), ['class' => 'form-control', 'id' => 'description', 'rows' => "8"]) }}
      </div>
    </div>
  </div>
</div>