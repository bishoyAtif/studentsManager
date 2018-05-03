@extends('dashboard.layouts.app')

@section('content')
  <div class="container">
    {{ Form::model($student, ['route' => ['dashboard.students.update', $student->id], 'method' => 'PATCH', 'files' => true]) }}
      @include('dashboard.students._form')
      {{ Form::submit('Edit Student', ['class' => 'btn btn-warning']) }}
    {{ Form::close() }}
  </div>
@endsection