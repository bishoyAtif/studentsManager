@extends('dashboard.layouts.app')

@section('title')
  Departments
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <button type="button" href="{!! route('dashboard.departments.create') !!}" class="btn btn-info btn-flat btn-addon m-b-10 m-l-5"><i class="ti-plus"></i> Add Department</button>
    </div>
    <table id="departments-table" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
@endsection

@section('footerScripts')
  <script>
    $(document).ready(function() {
      $('#departments-table').DataTable( {
        serverSide: true,
        processing: true,
        ajax: {
          url: '{!! route('dashboard.ajax.departments.index') !!}'
        },
        columns: [
          { data: "name" },
          { data: "description" },
          {
            searchable: null,
            orderable: null,
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