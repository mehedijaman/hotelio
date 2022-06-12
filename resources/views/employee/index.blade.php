@extends('layouts.app')
@extends('layouts.Header')

@section('content')
<div class="container-fluid">
    <a href="/employee/create" class="btn btn-primary">Add new Employee</a>
    <!--Table-->
    <div class="table col-md-12">
        <table class="table table-striped w-auto ">

            <!--Table head-->
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
                
              </tr>
            </thead>
            <!--Table head-->
          
            <!--Table body-->
            <tbody>
                  @foreach ( $Employees as $Employee )
                        <tr class="table-info">
                              <td>{{$Employee->id}}</td>
                              <td>{{$Employee->HoteID}}</td>
                              <td>{{$Employee->Name}}</td>
                              <td>{{$Employee->Designation}}</td>
                              <td>{{$Employee->NIDNo}}</td>
                              <td>{{$Employee->NID}}</td>
                              <td>{{$Employee->Phone}}</td>
                              <td>{{$Employee->Email}}</td>
                              <td>{{$Employee->Address}}</td>
                              <td>{{$Employee->DateOfJoin}}</td>
                              <td>{{$Employee->Status}}</td>
                              <td>
                                    <a href="/employee/{{$Employee->id}}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/employee/{{$Employee->id}}/delete" class="btn btn-danger mx-md-2">Delete</a>
                              </td>
                        </tr>
                  @endforeach

            </tbody>
            <!--Table body-->
          
          
          </table>
          <!--Table-->
    </div>

</div>
@endsection
