@extends('dashboard.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <a href="{!! route('dashboard.students.create') !!}"><i class="fas fa-plus-square"></i> Add Student</a>
    </div>
    <table id="students-table" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>#</th>
          <th>avatar</th>
          <th>Name</th>
          <th>department</th>
          <th>actions</th>
        </tr>
      </thead>
    </table>
  </div>
@endsection

@section('footerScripts')
  <script>
    $(document).ready(function() {
      $('#students-table').DataTable( {
        serverSide: true,
        processing: true,
        ajax: {
          url: '{!! route('dashboard.ajax.students.index') !!}'
        },
        columns: [
          { data: "id" },
          {
            data: "avatar",
            render: function(data){
              return "<img width='100px' height='50px' src='" + data + "'>";
            }
          },
          { data: "name" },
          { data: "department_id" },
          {
            data: "actions",
            render: function(data){
              return htmlDecode(data);
             }
          },
        ]
      } );
    } );
  </script>
@endsection