@extends('layouts.app')
@section('content')
    <div class="container py-5">
        {{-- <section class="button mb-4">
            <a href="{{ asset('booking') }}" class="btn btn-info text-capitalize">Back To List</a>
        </section> --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <a href="{{ asset('booking') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                                Booking Trash List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize" href="/booking/emptyTrash"><i class="fa-solid fa-recycle mr-2"></i>Empty Trash</a>
                        <a class="btn btn-sm btn-success float-right text-capitalize mr-3" href="/booking/restoreAll"><i class="fa-solid fa-trash-can mr-2"></i>Restore All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>RoomID</th>
                                    <th>GuestID</th>
                                    <th>CheckInDate</th>
                                    <th>CheckOutDate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($Bookings as $Booking)
                                    <tr>
                                        <td>{{$Booking->RoomID}}</td>
                                        <td>{{$Booking->GuestID}}</td>
                                        <td>{{$Booking->CheckInDate}}</td>
                                        <td>{{$Booking->CheckOutDate}}</td>
                                        <td class="">

                                            <a href="/Booking/{{ $Booking->id }}/restore" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Restore"><i class="fa-solid fa-trash-arrow-up ml-2 text-success"></i></a>
                                            <a href="/Booking/{{ $Booking->id }}/parmanently/delete" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Parmanently Delete"><i class="fa-solid fa-trash-can ml-2 text-danger"></i> </a>

                                            {{-- <span class="dropdown">
                                                <button class="" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical"><circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle><circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle><circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
                                                </svg></button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="/booking/{{ $Booking->id }}/edit"><i class="fa-regular fa-pen-to-square mr-2 text-orange"></i></i>Edit</a></li>
                                                    
                                                </ul>
                                            </span> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection