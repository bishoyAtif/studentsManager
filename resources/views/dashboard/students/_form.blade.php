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
    <div class="col-md-4">
      <div class="form-group">
        <label for="email" class="control-label">Email</label>
        {{ Form::email('email', old('email'), ['class' => 'form-control', 'id' => 'email']) }}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="avatar" class="control-label">Avatar</label>
        {{ Form::file('avatar', old('avatar'), ['class' => 'form-control', 'id' => 'avatar']) }}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label for="department_id" class="control-label">Department</label>
        {{ Form::select('department_id', $departments, old('department_id'), ['class' => 'form-control', 'id' => 'department_id']) }}
      </div>
    </div>
  </div>
</div>