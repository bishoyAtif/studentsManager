<div class="form-group row">
    <label for="name">Name</label>
    {{ Form::text('name', old('name'), ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group row">
    <label for="description">Description</label>
    {{ Form::textarea('description', old('description'), ['class' => 'form-control', 'id' => 'description']) }}
</div>
