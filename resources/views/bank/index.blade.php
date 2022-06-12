@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a href="/bank/create" class="btn btn-primary">Add to Bank</a>
    <div class="table col-md-12">
        <table class="table table-striped w-auto " id="bankTable">
            <thead>
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Branch</th>
                <th>Account No</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($Banks as $Bank )
                <tr class="table-info">
                  <td>{{$Bank->id}}</td>
                  <td>{{$Bank->Name}}</td>
                  <td>{{$Bank->Branch}}</td>
                  <td>{{$Bank->AccountNo}}</td>
                  <td>{{$Bank->Address}}</td>
                  <td>{{$Bank->Phone}}</td>
                  <td>{{$Bank->Email}}</td>
                  <td>
                    <a href="/bank/{{$Bank->id}}/edit" class="btn btn-warning">Edit</a>
                    <a href="/bank/{{$Bank->id}}/delete" class="btn btn-danger mx-md-2">Delete</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready( function () {
        $('#bankTable').DataTable();
    } );
</script>
@endsection
