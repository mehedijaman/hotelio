@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary card-solid">
            <div class="card-header">
                Total Rooms : {{ $TotalRooms }} | Booked : {{ $TotalBookedRooms }} | Free : {{ $TotalFreeRooms }}
            </div>
            <div class="card-body">
                @foreach($Rooms as $Room)
                <button class="btn @if($Room->Status) btn-danger disabled @else btn-primary @endif">{{ $Room->RoomNo }}</button>
                @endforeach
            </div>
        </div>
    </div>
@endsection
