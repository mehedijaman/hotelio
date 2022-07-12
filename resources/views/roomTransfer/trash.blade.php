@extends('layouts.app')
@section('content')
    <div class="container py-5">
        {{-- <section class="button mb-4">
            <a href="{{ asset('roomTransfer') }}" class="btn btn-info text-capitalize">Back To List</a>
        </section> --}}
        <div class="row">
            <div class="col-md-12">
                @if (Session::get('PermanentlyDelete'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icone fas fa-exclamation-triangle"></i> Deleted !</h5>
                        {{Session::get('PermanentlyDelete')}}
                    </div>
                @endif
                @if (Session::get('EmptyTrash'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icone fas fa-exclamation-triangle"></i> Deleted !</h5>
                        {{Session::get('EmptyTrash')}}
                    </div>
                @endif
                @if (Session::get('Restore'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Success !</h5>
                        {{Session::get('Restore')}}
                    </div>
                @endif
                @if (Session::get('RestoreAll'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Success !</h5>
                        {{Session::get('RestoreAll')}}
                    </div>
                @endif
                
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <a href="{{ asset('roomTransfer') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                                RoomTransfer Trash List
                            </h2>
                        </div>
                        <a href="/roomTransfer/emptyTrash" class="btn btn-sm bg-maroon float-right text-capitalize"><i class="fa-solid fa-trash-can mr-2"></i>Empty Trash</a>
                        <a href="/roomTransfer/restoreAll" class="btn btn-sm btn-success float-right text-capitalize mr-3"><i class="fa-solid fa-undo mr-2"></i>Restore All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr class="border-bottom">
                                    
                                    <th>Guest</th>
                                    <th>FromRoom</th>
                                    <th>ToRoom</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($RoomTransfers as $RoomTransfer)
                                    <tr class="border-bottom">
                                        <td>{{ $RoomTransfer->GuestID }}</td>
                                        <td style="padding-left: 3rem !important">{{ $RoomTransfer->FromRoomID }} </td>
                                        <td style="padding-left: 2.2rem !important">{{ $RoomTransfer->ToRoomID }}</td>
                                        <td> 
                                            @php
                                                echo date('d-m-Y',strtotime($RoomTransfer->Date))  
                                            @endphp
                                        </td>
                                        <td class="action__trash">
                                            {{-- Restore --}}
                                            {{-- <a href="/roomTransfer/{{ $RoomTransfer->id }}/restore" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Restore"><i class="fa-solid fa-undo ml-2 text-success"></i></a> --}}
                                            <button value="{{$RoomTransfer->id}}"class="RestoreBtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Restore"><i class="fa-solid fa-undo ml-2 text-success"></i>
                                            </button>
                                            
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
                    <div class="card-footer">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.RestoreBtn').on('click',function(e){
                e.preventDefault();
                // console.log($(this).val());
                var ID = $(this).val();

                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, restore it!'

                }).then((result) => {
                  if (result.isConfirmed) {
                    $.ajax({
                        type:'GET',
                        url:'/roomTransfer/'+ID+'/restore/',
                        success:function(data){
                           Swal.fire(
                              'Deleted!',
                              'Your file has been deleted.',
                              'success'
                            );
                        },
                        error:function(data){
                            Swal.fire(
                              'Error!',
                              'Delete failed !',
                              'error'
                            );

                            console.log(data);
                        },
                    });
                 }
                });
            });
        });
    </script>
@endsection