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
                                <a href="{{ asset('room/create') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Room"> 
                                    <i class="fa-solid fa-circle-plus mr-2"></i>
                                    Add
                                </a>
                                Room List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/room/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/room/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
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
                                    <th>Status</th>
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
                                        <td>@if($Room->Geyser)Avilable @else Inavilable @endif</td>
                                        <td>@if($Room->Ac)Avilable @else Inavilable @endif</td>
                                        <td>@if($Room->Balcony)Avilable @else Inavilable @endif</td>
                                        <td>@if($Room->Internet)Avilable @else Inavilable @endif</td>
                                        <td>@if($Room->Tv)Avilable @else Inavilable @endif</td>
                                        <td>{{$Room->Price}}</td>
                                        <td>@if($Room->Status)<b class="text-success">Active</b> @else <b class="text-danger">Deactive</b> @endif</td>

                                        
                                        <td class="d-flex">
                                           <a href="{{ URL::to('/room/'.$Room->id) }}" class="mr-3 text-purple" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View">
                                            <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye"><path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle></svg>
                                           </a>
                                            <a class="" href="/room/{{ $Room->id }}/edit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                                <i class="fa-regular fa-pen-to-square mr-3 text-orange"></i></i>
                                            </a>
                                        
                                            {{ Form::open(array('url' => '/room/'.$Room->id,'method' => 'DELETE')) }}
                                                <button class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                    <i class="fa-regular fa-trash-can mr-3 text-danger"></i>
                                                </button>
                                            {{ Form::close() }} 
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
