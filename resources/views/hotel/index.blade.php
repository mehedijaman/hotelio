@extends('layouts.app')
@extends('layouts.Header')

@section('content')
<div class="container-fluid">
    <a href="/hotel/create" class="btn btn-primary">Add to Hotel</a>
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
                </tr>
              @endforeach
            </tbody>
            <!--Table body-->
          
          
          </table>
          <!--Table-->
    </div>

</div>
@endsection
