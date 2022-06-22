@extends('layouts.app')
@section('content')
    <div class="container">
        <section class="button mb-4">
            <a href="{{ asset('roomTransfer/create') }}" class="btn btn-info text-capitalize">Add RoomTransfer</a>
        </section>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title">
                            <h2 class="card-title">RoomTransfer List</h2>
                        </div>
                        <a class="btn btn-sm bg-fuchsia float-right text-capitalize" href="/roomTransfer/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/roomTransfer/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>
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
                                        <td>{{ $RoomTransfer->id }}</td>
                                        <td>{{ $RoomTransfer->GuestID }}</td>
                                        <td>{{ $RoomTransfer->FromRoomID }} </td>
                                        <td>{{ $RoomTransfer->ToRoomID}}</td>
                                        <td>{{ $RoomTransfer->Date }}</td>
                                        <td>
                                            <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye"><path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle></svg>
                                            <span class="dropdown">
                                                <button class="" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical"><circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle><circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle><circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
                                                </svg></button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="/roomTransfer/{{ $RoomTransfer->id }}/edit"><i class="fa-regular fa-pen-to-square mr-2 text-orange"></i></i>Edit</a></li>
                                                    
                                                    <li>
                                                        {{ Form::open(array('url' => '/roomTransfer/'.$RoomTransfer->id,'method' => 'DELETE')) }}
                                                            
                                                            <button class="dropdown-item" href=""><i class="fa-regular fa-trash-can mr-2 text-danger"></i>Delete</button>

                                                        {{ Form::close() }} 
                                                    </li>
                                                    <li></li>
                                                    
                                                </ul>
                                            </span>

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