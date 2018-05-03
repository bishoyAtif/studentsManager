@extends('dashboard.layouts.app')

@section('content')
  <div class="container">
    {{ Form::open(['route' => 'dashboard.students.store', 'files' => true]) }}
      @include('dashboard.students._form')
      {{ Form::submit('Add Student', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
  </div>
@endsection