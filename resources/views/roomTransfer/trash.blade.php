@extends('layouts.app')
@section('content')
    <div class="container py-5">
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
                        <button id="EmptyTrashBtn" class="btn btn-sm bg-maroon float-right text-capitalize">
                            <i class="fa-solid fa-trash-can mr-2"></i>
                            Empty Trash
                        </button>

                        <button class="btn btn-sm btn-success float-right text-capitalize mr-3" id="RestoreAllBtn">
                            <i class="fa-solid fa-undo mr-2"></i>
                            Restore All
                        </button>
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
                                    <tr class="border-bottom" id="TrashForm">
                                        <td>{{ $RoomTransfer->GuestID }}</td>
                                        <td style="padding-left: 3rem !important">{{ $RoomTransfer->FromRoomID }} </td>
                                        <td style="padding-left: 2.2rem !important">{{ $RoomTransfer->ToRoomID }}</td>
                                        <td> 
                                            @php
                                                echo date('d-m-Y',strtotime($RoomTransfer->Date))  
                                            @endphp
                                        </td>
                                        <td class="action__trash">
                                            <button value="{{$RoomTransfer->id}}"class="RestoreBtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Restore"><i class="fa-solid fa-undo ml-2 text-success"></i>
                                            </button>
                                            
                                            <button value="{{$RoomTransfer->id}}"class="PermanentlyDeleteBtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Parmanently Delete"><i class="fa-solid fa-trash-can ml-2 text-danger"></i> </button>
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
                let ID = $(this).val();

                Swal.fire({

                    title: 'Are you sure?',
                    text: "Do you want to restore it!",
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
                                'Resoted!',
                                'Your file has been resoted.',
                                'success'
                                );
                            },
                            error:function(data){
                                Swal.fire(
                                'Error!',
                                'Resoted failed !',
                                'error'
                                );

                                console.log(data);
                            },
                        });
                    }
                });
            });

            $('#RestoreAllBtn').on('click',function(e){
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to restore all it!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, restore all it!'

                }).then((result) => {
                    
                    if (result.isConfirmed) {
                        $.ajax({
                            type:'GET',
                            url:'/roomTransfer/restoreAll',
                            success:function(data){
                            Swal.fire(
                                'Restore All!',
                                'Your file has been restore all .',
                                'success'
                                );
                            },
                            error:function(data){
                                Swal.fire(
                                'Error!',
                                'Resoted all failed !',
                                'error'
                                );

                                console.log(data);
                            },
                        });
                    }
                });
            });

            $('.PermanentlyDeleteBtn').on('click',function(e){
                e.preventDefault();
                // console.log($(this).val());
                let ID = $(this).val();

                Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, Parmanently Delete it!'
                }).then((result) => {
                  if (result.isConfirmed) {
                    $.ajax({
                        type:'GET',
                        url:'/roomTransfer/'+ID+'/parmanently/delete',
                        success:function(data){
                           Swal.fire(
                              'Parmanently Deleted!',
                              'Your file has been Parmanently Deleted.',
                              'success'
                            );
                        },
                        error:function(data){
                            Swal.fire(
                              'Error!',
                              'Parmanently Delete failed !',
                              'error'
                            );

                            console.log(data);
                        },
                    });

                    
                 }
                });
            });

            $('#EmptyTrashBtn').on('click',function(e){
                e.preventDefault();

                Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to EmptyTrash this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, EmptyTrash it!'
                }).then((result) => {
                  if (result.isConfirmed) {
                    $.ajax({
                        type:'GET',
                        url:'/roomTransfer/emptyTrash',
                        success:function(data){
                           Swal.fire(
                              'EmptyTrash!',
                              'Your file has been EmptyTrash.',
                              'success'
                            );
                        },
                        error:function(data){
                            Swal.fire(
                              'Error!',
                              'EmptyTrash failed !',
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