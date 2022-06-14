@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a href="/employee/create" class="btn btn-primary mb-md-3">Add new Employee</a>

    <div class="table col-md-12">
        <table class="table table-stripd table-bordered table-dark text-light w-auto">

            <thead>
              <tr>
                <th>id</th>
                <th>HoteID</th>
                <th>Name</th>
                <th>Designation</th>
                <th>DateOfBirth</th>
                <th>NID No</th>
                <th>NID Document</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Date Of Join</th>
                <th>Status</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
                  
                  @foreach ( $Employees as $Employee )
                        <tr class="table-info text-dark">
                              <td>{{$Employee->id}}</td>
                              <td>{{$Employee->HoteID}}</td>
                              <td>{{$Employee->Name}}</td>
                              <td>{{$Employee->Designation}}</td>
                              <td>{{$Employee->DateOfBirth}}</td>
                              <td>{{$Employee->NIDNo}}</td>
                              <td>{{$Employee->NID}}</td>
                              <td>{{$Employee->Phone}}</td>
                              <td>{{$Employee->Email}}</td>
                              <td>{{$Employee->Address}}</td>
                              <td>{{$Employee->DateOfJoin}}</td>
                              <td>{{$Employee->Status}}</td>
                              <td>
                                    <a href="/employee/{{$Employee->id}}/edit" class="btn btn-warning mx-md-2 mb-md-2">Edit</a>
                                    <a href="/employee/{{$Employee->id}}/delete" class="btn btn-danger mx-md-2">Delete</a>
                              </td>
                        </tr>
                  @endforeach

            </tbody>
          </table>

    </div>

</div>
@endsection
