@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a href="/room/create" class="btn btn-primary">Add to Room</a>

    <div class="table col-md-12">
        <table class="table text-light" id="dataTable">
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
            <tbody>
                @foreach ( $Rooms as $Room)
                    <tr class="table-info text-dark">
                        <td>{{$Room->id}}</td>
                        <td>{{$Room->HoteID}}</td>
                        <td>{{$Room->RoomNo}}</td>
                        <td>{{$Room->Floor}}</td>
                        <td>{{$Room->Type}}</td>
                        <td>{{$Room->Geyser}}</td>
                        <td>{{$Room->AC}}</td>
                        <td>{{$Room->Balcony}}</td>
                        <td>{{$Room->Bathtub}}</td>
                        <td>{{$Room->HiComode}}</td>
                        <td>{{$Room->Locker}}</td>
                        <td>{{$Room->Freeze}}</td>
                        <td>{{$Room->Internet}}</td>
                        <td>{{$Room->Intercom}}</td>
                        <td>{{$Room->TV}}</td>
                        <td>{{$Room->Wardrobe}}</td>
                        <td>{{$Room->Price}}</td>
                        <td>{{$Room->AdditionalFeatures}}</td>
                        <td>{{$Room->Status}}</td>
                        <td>
                            <a href="/room/{{$Room->id}}/edit" class="btn btn-warning">Edit</a>
                            <a href="/room/{{$Room->id}}/delete" class="btn btn-danger mx-md-2">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#dataTable').DataTable();
    });
</script>
@endsection
