@extends('dashboard.layouts.app')

@section('title')
  Edit Student
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      {{ Form::model($student, ['route' => ['dashboard.students.update', $student->id], 'method' => 'PATCH', 'files' => true]) }}
        @include('dashboard.students._form')
        <div class="form-actions">
          <button type="submit" class="btn btn-warning"> <i class="ti-pencil-alt"></i> Edit</button>
          <button type="button" href="{{ route('dashboard.students.index') }}" class="btn btn-inverse">Cancel</button>
        </div>
      {{ Form::close() }}
    </div>
  </div>
@endsection