@extends('layouts.app')
@section('content')
    <div class="container py-5">
        {{-- <section class="button mb-4">
            <a href="{{ asset('booking/create') }}" class="btn btn-info text-capitalize"> <i class="fa-solid fa-circle-plus mr-2"></i>Add</a>
        </section> --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <a href="{{ asset('room') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                                Room Trash List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize" id="EmptyTrashBtn">
                            <i class="fa-solid fa-recycle mr-2"></i>
                            Empty Trash
                        </a>
                        <button class="btn btn-sm btn-success float-right text-capitalize mr-3" id="RestoreAllBtn">
                            <i class="fa-solid fa-undo mr-2"></i>
                            Restore All
                        </button>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-responsive table-borderless table__custom">
                            <thead>
                                <tr class="border-bottom">
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
                                    <tr class="border-bottom">
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
                                        <td class="d-flex">
                                            <button value="{{$Room->id}}" class="RestoreBtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Restore">
                                                <i class="fa-solid fa-undo mr-2 text-success"></i>
                                            </button>

                                            <button value="{{ $Room->id }}" class="PermanentlyDeleteBtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Parmanently Delete">
                                                <i class="fa-solid fa-trash-can ml-2 text-danger"></i> 
                                            </button>
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
                            url:'/room/'+ID+'/restore/',
                            success:function(data){
                            Swal.fire(
                                'Resoted!',
                                'Your file has been restored.',
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
                            url:'/room/restoreAll',
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
                        url:'/room/'+ID+'/parmanently/delete',
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
                            url:'/Room/emptyTrash',
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