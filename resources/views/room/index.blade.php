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
                
              </tr>
            </thead>
            <!--Table head-->
          
            <!--Table body-->
            <tbody>
              <tr class="table-info">
                
              </tr>
            </tbody>
            <!--Table body-->
          
          
          </table>
          <!--Table-->
    </div>

</div>
@endsection
