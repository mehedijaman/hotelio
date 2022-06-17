@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a href="/room/create" class="btn btn-primary mb-md-3 mx-md-2">Add to Room</a>

    <div class="table col-md-12 table-responsive">
        <table class="table table-hover text-center invoice__index__table__bg text-light w-auto mx-md-1" id="dataTable">
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
                    <tr class="">
                        <td>{{ $Room->id }}</td>
                        <td>{{ $Room->HoteID }}</td>
                        <td>{{ $Room->RoomNo }}</td>
                        <td>{{ $Room->Floor }}</td>
                        <td>{{ $Room->Type }}</td>
                        <td>{{ $Room->Geyser }}</td>
                        <td>{{ $Room->AC }}</td>
                        <td>{{ $Room->Balcony }}</td>
                        <td>{{ $Room->Bathtub }}</td>
                        <td>{{ $Room->HiComode }}</td>
                        <td>{{ $Room->Locker }}</td>
                        <td>{{ $Room->Freeze }}</td>
                        <td>{{ $Room->Internet }}</td>
                        <td>{{ $Room->Intercom }}</td>
                        <td>{{ $Room->TV }}</td>
                        <td>{{ $Room->Wardrobe }}</td>
                        <td>{{ $Room->Price }}</td>
                        <td>{{ $Room->AdditionalFeatures }}</td>
                        <td>{{ $Room->Status }}</td>
                        <td>
                            <a href="/room/{{ $Room->id }}/edit" class="btn btn-warning">Edit</a>

                            {!! Form::open(['url' => '/room/'.$Room->id ,'method' => 'DELETE']) !!}
                                <input type="submit" name="submit" value="Delete" class="btn btn-danger mx-md-2">
                            {!! Form::close() !!}
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
