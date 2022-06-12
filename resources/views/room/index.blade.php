@extends('layouts.app')
@extends('layouts.Header')

@section('content')
<div class="container-fluid">
    <a href="/room/create" class="btn btn-primary">Add to Room</a>
    <!--Table-->
    <div class="table col-md-12">
        <table class="table table-striped w-auto ">

            <!--Table head-->
            <thead>
              <tr>
                <th>id</th>
                <th>HoteID</th>
                <th>RoomNo</th>
                <th>Floor</th>
                <th>Type</th>
                <th>Geyser</th>
                <th>AC</th>
                <th>Balcony</th>
                <th>Bathtub</th>
                <th>HiComode</th>
                <th>Locker</th>
                <th>Freeze</th>
                <th>Internet</th>
                <th>Intercom</th>
                <th>TV</th>
                <th>Wardrobe</th>
                <th>AdditionalFeatures</th>
                <th>Status</th>
                <th>Action</th>
                
              </tr>
            </thead>
            <!--Table head-->
          
            <!--Table body-->
            <tbody>
              @foreach ( $Rooms as $Room)
                <tr class="table-info">
                  <td>{{$Room->id}}</td>
                  <td>{{$Room->Name}}</td>
                  <td>{{$Room->Email}}</td>
                  <td>{{$Room->Address}}</td>
                  <td>{{$Room->Phone}}</td>
                  <td>{{$Room->NIDNo}}</td>
                  <td>{{$Room->NID}}</td>
                  <td>{{$Room->PassportNo}}</td>
                  <td>{{$Room->Passport}}</td>
                  <td>{{$Room->Father}}</td>
                  <td>{{$Room->Mother}}</td>
                  <td>{{$Room->Spouse}}</td>
                  <td>{{$Room->Photo}}</td>
                  <td>
                    <a href="/room/{{$Room->id}}/edit" class="btn btn-warning">Edit</a>
                    <a href="/room/{{$Room->id}}/delete" class="btn btn-danger mx-md-2">Delete</a>
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
