@extends('layouts.app')
@extends('layouts.Header')

@section('content')
<div class="container-fluid">
    <a href="/Guest/create" class="btn btn-primary">Add to New Guest</a>
    <!--Table-->
    <div class="table col-md-12">
        <table class="table table-striped w-auto ">

            <!--Table head-->
            <thead>
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>NID NO</th>
                <th>NID Documents</th>
                <th>Passport NO</th>
                <th>Passport Documents</th>
                <th>Father</th>
                <th>Mother</th>
                <th>Spouse</th>
                <th>Photo</th>
                <th>Action</th>
              </tr>
            </thead>
            <!--Table head-->
          
            <!--Table body-->
            <tbody>
              @foreach ( $Guests as $Guest)
                <tr class="table-info">
                  <td>{{$Guest->id}}</td>
                  <td>{{$Guest->Name}}</td>
                  <td>{{$Guest->Email}}</td>
                  <td>{{$Guest->Address}}</td>
                  <td>{{$Guest->Phone}}</td>
                  <td>{{$Guest->NIDNo}}</td>
                  <td>{{$Guest->NID}}</td>
                  <td>{{$Guest->PassportNo}}</td>
                  <td>{{$Guest->Passport}}</td>
                  <td>{{$Guest->Father}}</td>
                  <td>{{$Guest->Mother}}</td>
                  <td>{{$Guest->Spouse}}</td>
                  <td>{{$Guest->Photo}}</td>
                  <td>
                    <a href="/guest/{{$Guest->id}}/edit" class="btn btn-warning">Edit</a>
                    <a href="/guest/{{$Guest->id}}/delete" class="btn btn-danger mx-md-2">Delete</a>
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
