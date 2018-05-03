@extends('dashboard.layouts.app')

@section('title')
  Add Student
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      {{ Form::open(['route' => 'dashboard.students.store', 'files' => true]) }}
        @include('dashboard.students._form')
        <div class="form-actions">
          <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Save</button>
          <button type="button" href="{{ route('dashboard.students.index') }}" class="btn btn-inverse">Cancel</button>
        </div>
      {{ Form::close() }}
    </div>
  </div>
@endsection