<div class="form-group row">
    <label for="name">Name</label>
    {{ Form::text('name', old('name'), ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group row">
    <label for="email">Email</label>
    {{ Form::email('email', old('email'), ['class' => 'form-control', 'id' => 'email']) }}
</div>
<label for="avatar">Avatar</label>
<div class="form-group row">
    {{ Form::file('avatar', old('avatar'), ['class' => 'form-control', 'id' => 'avatar']) }}
</div>
<div class="form-group row">
    <label for="department_id">Department</label>
    {{ Form::select('department_id', $departments, old('department_id'), ['class' => 'form-control', 'id' => 'department_id']) }}
</div>
