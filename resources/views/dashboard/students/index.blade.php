@extends('dashboard.layouts.app')

@section('title')
  Students
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <button type="button" href="{!! route('dashboard.students.create') !!}" class="btn btn-info btn-flat btn-addon m-b-10 m-l-5"><i class="ti-plus"></i> Add Student</button>
    </div>
    <table id="students-table" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>#</th>
          <th>avatar</th>
          <th>Name</th>
          <th>department</th>
          <th>Actions</th>
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
          { data: "department" },
          {
            sortable: null,
            searchable: null,
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