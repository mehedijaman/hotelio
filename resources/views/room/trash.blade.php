@extends('layouts.app')
@section('content')
    <div class="container py-5">
        {{-- <section class="button mb-4">
            <a href="{{ asset('booking/create') }}" class="btn btn-info text-capitalize"> <i class="fa-solid fa-circle-plus mr-2"></i>Add</a>
        </section> --}}
        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <a href="{{ asset('room') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                                Room Trash List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize" href="/Room/emptyTrash"><i class="fa-solid fa-recycle mr-2"></i>Empty Trash</a>
                        <a class="btn btn-sm btn-success float-right text-capitalize mr-3" href="/room/restoreAll"><i class="fa-solid fa-trash-can mr-2"></i>Restore All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table__custom">
                            <thead>
                                <tr>
                                    <th>Hotel</th>
                                    <th>RoomNo</th>
                                    <th>Floor</th>
                                    <th>Type</th>
                                    <th>Geyser</th>
                                    <th>Ac</th>
                                    <th>Balcony</th>
                                    <th>Internet</th>
                                    <th>Tv</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($Rooms as $Room)
                                    <tr class="">
                                        <td>{{$Room->HotelName}}</td>
                                        <td>{{$Room->RoomNo}}</td>
                                        <td>{{$Room->Floor}}</td>
                                        <td>{{$Room->Type}}</td>
                                        <td>@if($Room->Geyser) <i class="fa-solid fa-square-check text-green ml-4"> @else <i class="fa-solid fa-square-xmark text-danger ml-4"> @endif</td>
                                        <td>@if($Room->Ac) <i class="fa-solid fa-square-check text-green ml-1"> @else <i class="fa-solid fa-square-xmark text-danger ml-1"> @endif</td>
                                        <td>@if($Room->Balcony) <i class="fa-solid fa-square-check text-green ml-4"> @else <i class="fa-solid fa-square-xmark text-danger ml-4"> @endif</td>
                                        <td>@if($Room->Internet) <i class="fa-solid fa-square-check text-green ml-4"> @else <i class="fa-solid fa-square-xmark text-danger ml-4"> @endif</td>
                                        <td>@if($Room->Tv) <i class="fa-solid fa-square-check text-green ml-1"> @else <i class="fa-solid fa-square-xmark text-danger ml-1"> @endif</td>
                                        <td>{{$Room->Price}}</td>
                                        <td class="">
                                            <a href="/room/{{ $Room->id }}/restore" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Restore"><i class="fa-solid fa-trash-arrow-up ml-2 text-success"></i></a>
                                            <a href="/room/{{ $Room->id }}/parmanently/delete" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Parmanently Delete"><i class="fa-solid fa-trash-can ml-2 text-danger"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                           
                        </table>
                    </div>
                    <div class="card-footer">
                     
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection