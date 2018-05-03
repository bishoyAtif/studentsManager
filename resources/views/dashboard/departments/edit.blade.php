@extends('dashboard.layouts.app')

@section('title')
  Edit Department
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      {{ Form::model($department, ['route' => ['dashboard.departments.update', $department->id], 'method' => 'PATCH']) }}
        @include('dashboard.departments._form')
        <div class="form-actions">
          <button type="submit" class="btn btn-warning"> <i class="ti-pencil-alt"></i> Edit</button>
          <button type="button" href="{{ route('dashboard.departments.index') }}" class="btn btn-inverse">Cancel</button>
        </div>
      {{ Form::close() }}
    </div>
  </div>
@endsection