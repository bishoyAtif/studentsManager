@extends('dashboard.layouts.app')

@section('content')
  <div class="container">
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