@extends('layouts.app')
@extends('layouts.Header')

@section('content')
<div class="container-fluid">
    <a href="/hotel1/create" class="btn btn-primary">Add to Hotel</a>
    <!--Table-->
    <div class="table col-md-12">
        <table class="table table-striped w-auto ">

            <!--Table head-->
            <thead>
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Title</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Reg NO</th>
                <th>Logo</th>
                <th>Photo</th>
              </tr>
            </thead>
            <!--Table head-->
          
            <!--Table body-->
            <tbody>
              @foreach ( $Hotels as $Hotel)
                <tr class="table-info">
                  <td>{{$Hotel->id}}</td>
                  <td>{{$Hotel->Name}}</td>
                  <td>{{$Hotel->Title}}</td>
                  <td>{{$Hotel->Email}}</td>
                  <td>{{$Hotel->Address}}</td>
                  <td>{{$Hotel->Phone}}</td>
                  <td>{{$Hotel->RegNO}}</td>
                  <td>{{$Hotel->Logo}}</td>
                  <td>{{$Hotel->Photo}}</td>
                  <td>
                    <a href="/hotel1/{{$Hotel->id}}/edit" class="btn btn-warning">Edit</a>
                    <a href="/hotel1/{{$Hotel->id}}/delete" class="btn btn-danger mx-md-2">Delete</a>
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
