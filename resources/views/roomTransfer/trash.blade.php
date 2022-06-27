@extends('layouts.app')
@section('content')
    <div class="container py-5">
        {{-- <section class="button mb-4">
            <a href="{{ asset('roomTransfer') }}" class="btn btn-info text-capitalize">Back To List</a>
        </section> --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <a href="{{ asset('roomTransfer') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                                RoomTransfer Trash List
                            </h2>
                        </div>
                        <a href="/roomTransfer/emptyTrash" class="btn btn-sm bg-maroon float-right text-capitalize"><i class="fa-solid fa-trash-can mr-2"></i>Empty Trash</a>
                        <a href="/roomTransfer/restoreAll" class="btn btn-sm btn-success float-right text-capitalize mr-3"><i class="fa-solid fa-trash-arrow-up mr-2"></i>Restore All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    
                                    <th>GuestID</th>
                                    <th>FromRoomID</th>
                                    <th>ToRoomID</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($RoomTransfers as $RoomTransfer)
                                    <tr>
                                        <td>{{ $RoomTransfer->GuestID }}</td>
                                        <td>{{ $RoomTransfer->FromRoomID }} </td>
                                        <td>{{ $RoomTransfer->ToRoomID}}</td>
                                        <td>{{ $RoomTransfer->Date }}</td>
                                        <td class="action__trash">
                                            {{-- Restore --}}
                                            <a href="/roomTransfer/{{ $RoomTransfer->id }}/restore" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Restore"><i class="fa-solid fa-trash-arrow-up ml-2 text-success"></i></a>
                                            
                                            <a href="/roomTransfer/{{ $RoomTransfer->id }}/parmanently/delete" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Parmanently Delete"><i class="fa-solid fa-trash-can ml-2 text-danger"></i> </a>
                                            {{-- <span class="dropdown">
                                                <button class="" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical"><circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle><circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle><circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
                                                </svg></button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="/roomTransfer/{{ $RoomTransfer->id }}/edit"><i class="fa-regular fa-pen-to-square mr-2"></i></i>Edit</a></li>
                                                </ul>
                                            </span> --}}

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot></tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection