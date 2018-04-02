@extends('dashboard.layouts.app')

@section('content')
  <div class="container">
    {{ Form::open(['route' => 'dashboard.departments.store']) }}
      @include('dashboard.departments._form')
      {{ Form::submit('Add Department', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
  </div>
@endsection