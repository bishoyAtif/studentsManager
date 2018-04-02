@extends('dashboard.layouts.app')

@section('content')
  <div class="container">
    {{ Form::model($department, ['route' => 'dashboard.departments.store']) }}
      @include('dashboard.departments._form')
      {{ Form::submit('Edit Department', ['class' => 'btn btn-warning']) }}
    {{ Form::close() }}
  </div>
@endsection