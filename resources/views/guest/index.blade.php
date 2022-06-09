@extends('layouts.app')
@extends('layouts.Header')

@section('content')
<div class="container-fluid">
    <a href="/guest/create" class="btn btn-primary">Add to New Guest</a>
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
              </tr>
            </thead>
            <!--Table head-->
          
            <!--Table body-->
            <tbody>
              @foreach ( $Guests as $guest)
                <tr class="table-info">
                  <td>{{$guest->id}}</td>
                  <td>{{$guest->Name}}</td>
                  <td>{{$guest->Email}}</td>
                  <td>{{$guest->Address}}</td>
                  <td>{{$guest->Phone}}</td>
                  <td>{{$guest->NIDNo}}</td>
                  <td>{{$guest->NID}}</td>
                  <td>{{$guest->PassportNo}}</td>
                  <td>{{$guest->Passport}}</td>
                  <td>{{$guest->Father}}</td>
                  <td>{{$guest->Mother}}</td>
                  <td>{{$guest->Spouse}}</td>
                  <td>{{$guest->Photo}}</td>
                </tr>
              @endforeach
            </tbody>
            <!--Table body-->
          
          
          </table>
          <!--Table-->
    </div>

</div>
@endsection
