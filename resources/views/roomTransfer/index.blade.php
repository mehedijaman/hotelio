@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                  <button type="button" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Room Transfer"data-toggle="modal" data-target="#NewRoomTransferModal"> 
                                <i class="fa-solid fa-circle-plus mr-2"></i>
                                Add
                            </button> 
                                RoomTransfer List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/roomTransfer/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                        <button class="btn btn-sm bg-maroon float-right text-capitalize mr-3" id="DeleteAll">
                            <i class="fa-solid fa-trash-can mr-2"></i>
                            Delete All
                        </button>
                    </div>
                    <div class="card-body table-responsive p-0 ">
                        <table class="table table-hover table-borderless ListTable" id="RoomTansferList">
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
                                {{-- @foreach ($RoomTransfers as $RoomTransfer)
                                    <tr class="border-bottom">
                                        <td>{{ $RoomTransfer->Guest }}</td>
                                        <td class="" style="padding-left: 3rem !important">{{ $RoomTransfer->FromRoomID }} </td>
                                        <td style="padding-left: 2.2rem !important">{{ $RoomTransfer->Room }}</td>
                                        <td>
                                            @php
                                                echo date('Y-m-d',strtotime($RoomTransfer->Date))  
                                            @endphp
                                        </td>
                                        <td class="d-flex">
                                            <button class="EditBtn" value ="{{ $RoomTransfer->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" style="cursor: pointer;">
                                                <i class="fa-regular fa-pen-to-square mr-3 text-orange"></i>
                                               
                                            </button>
                                                <button class="DeleteBtn" value="{{$RoomTransfer->id}}"   data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                    <i class="fa-regular fa-trash-can mr-3 text-danger"></i>
                                                </button>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                            <tfoot></tfoot>
                        </table>
                    </div>
                    <div class="card-footer"> </div>
                </div>
            </div>
        </div>

        <div class="modal fade show" id="NewRoomTransferModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add A New RoomTransfer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('method' => 'POST','class'=>'form-horizontal','id'=>'NewRoomTransferForm', 'files' => true)) }}

                            <div class="form-group row">
                                <label for="GuestID" class="form-label  col-md-3">Guest:</label>
                                <div class="col-md-8">
                                    <select type="number" name="GuestID" id=""  class="form-select" required>
                                        <option value="">Select Guest Name</option>
                                        @foreach ($Guests as $Guest)
                                            <option value="{{ $Guest->id }}">
                                                {{ $Guest->Name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="FromRoomID" class="form-label  col-md-3">FromRoom:</label>
                                <div class="col-md-8">
                                    <input type="number" name="FromRoomID" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ToRoomID" class="form-label  col-md-3">ToRoom:</label>
                                <div class="col-md-8">
                                    <select name="ToRoomID" class="form-control">
                                        <option value="">Select To Room</option>
                                        @foreach($Rooms as $Room)
                                            <option value="{{ $Room->id }}">{{ $Room->RoomNo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Date" class="form-label col-md-3">Date:</label>
                                <div class="col-md-8">
                                    <input type="date" name="Date" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default text-capitalize" id="ResetBtnForm">Reset</button>
                                <button type="button" name="submit" type="submit" class="btn bg-navy text-capitalize" id="SubmitBtn">submit</button>
                            </div>

                        {{ Form::close()}}
                    </div>
                    
                </div>
            </div>
        </div>

         <div class="modal fdae  show" id="EditRoomTransferModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">RoomTransfer Update</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       {{ Form::open(array('method' => 'PATCH','class'=>'form-horizontal','id'=>'EditRoomTransferForm', 'files' => true)) }}
                       <input type="hidden" name="ID" id="IDEdit">
                       <input type="text">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="GuestID" class="form-label col-md-3">Guest:</label>
                                <div class="col-md-8">
                                    <select type="number" name="GuestID" id="EditGuest"  class="form-select">
                                        <option value=""> Select Guest </option>
                                        @foreach ($Guests as $Guest)
                                            <option value="{{ $Guest->id }}">{{ $Guest->Name }}</option>
                                            
                                        @endforeach
                                    </select> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="FromRoomID" class="form-label col-md-3">FromRoom:</label>
                                <div class="col-md-8">
                                    <input type="number" name="FromRoomID" class="form-control" value="" id="EditFormRoom"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ToRoomID" class="form-label col-md-3">ToRoom:</label>
                                <div class="col-md-8">
                                    {{-- <select type="number" name="ToRoomID" id="EditToRoom" class="form-select">
                                        <option value="">Room Select</option>
                                        
                                        @foreach ($Rooms as $Room)
                                            <option value="{{ $Room->id }}">{{ $Room->RoomNo }}</option>
                                            @if ($RoomTransfer->ToRoomID == $Room->id)
                                                <option value="{{ $Room->id }}" selected>
                                                    {{ $Room->RoomNo }}
                                                </option>
                                                @else
                                                    <option value="{{ $Room->id }}">
                                                    {{ $Room->RoomNo }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>  --}}
                                    <select type="number" name="ToRoomID" id="EditToRoom"  class="form-select" value="">
                                        <option value="">Select Room</option>

                                        @foreach ($Rooms as $Room)  
                                            <option value="{{ $Room->id }}">{{ $Room->RoomNo }}</option>
                                        @endforeach

                                    </select>
                                </div>
                               
                            </div>
                            <div class="form-group row">
                                <label for="Date" class="form-label col-md-3">Date:</label>
                                <div class="col-md-8">
                                    <input type="date" name="Date" class="form-control" id="EditDate"> 
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" id="UpdateBtn" class="btn bg-navy float-right w-25" value="Update">
                        </div>
                    {{ Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $.noConflict();
            var RoomTansferList = $('#RoomTansferList').DataTable({
                serverSide:true,
                processing:true,
                colReorder:true,
                stateSave:true,
                responsive:true,
                ajax:{
                    url:'/roomTransfer',
                    type:'GET',
                },
                columns:
                [
                    {data:'Guest'},
                    {data:'FromRoomID'},
                    {data:'Room'},
                    {data:'Date'},
                    {data:'action',name:'action'},
                    
                ]
            });

            $('#ResetBtnForm').on('click',function(e){
                e.preventDefault();
                $('#NewRoomTransferForm')[0].reset();
            });

            $('#SubmitBtn').on('click',function(e){
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "/roomTransfer",
                    data: $('#NewRoomTransferForm').serializeArray(),
                    success: function (data) {
                        $('#NewRoomTransferForm')[0].reset();
                        $('#NewRoomTransferModal').modal('hide');
                        Swal.fire(
                            'Success !',
                            data,
                            'success'
                        )
                        RoomTansferList.draw(false);
                    },
                    error:function (data){  
                        console.log('Error while adding new RoomTransfer' + data);
                    }
                });
            });

            $('.DeleteBtn').on('click',function(e){
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
                  confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                  if (result.isConfirmed) {
                    $.ajax({
                        type:'GET',
                        url:'/roomTransfer/delete/'+ID,
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

            $('#DeleteAll').on('click',function(e){
                e.preventDefault();
                Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to DeleteAll this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, DeleteAll it!'
                }).then((result) => {
                  if (result.isConfirmed) {
                    $.ajax({
                        type:'GET',
                        url:'/roomTransfer/delete',
                        success:function(data){
                           Swal.fire(
                              'DeleteAll!',
                              'Your file has been DeleteAll.',
                              'success'
                            );
                        },
                        error:function(data){
                            Swal.fire(
                              'Error!',
                              'DeleteAll failed !',
                              'error'
                            );

                            console.log(data);
                        },
                    });

                    
                 }
                });
            });

            $('.EditBtn').on('click',function(e){
                e.preventDefault();
                // console.log($(this).val());
                var ID = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: "/roomTransfer/"+ID,
                    success: function(data) {
                        $('#EditRoomTransferForm')[0].reset();
                        $('#EditRoomTransferModal').modal('show');
                        $('#IDEdit').val(data['id']);
                        $('#EditGuest').val(data['GuestID']);
                        $('#EditFormRoom').val(data['FromRoomID']);
                        $('#EditDate').val(data['Date']);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            });

            $('#UpdateBtn').on('click',function(e){
                e.preventDefault();
                var ID = $('#IDEdit').val();
                console.log(ID);

                $.ajax({
                    type: 'PATCH',
                    url: '/roomTransfer/'+ID,
                    data: $('#EditRoomTransferForm').serializeArray(),
                    success: function (data) {
                        $('#EditRoomTransferModal').modal('hide');
                        $('#EditRoomTransferForm')[0].reset();
                         Swal.fire(
                            'success',
                            'Tax updated successfully',
                            'success'
                        );
                    },
                    error:function(data)
                    {
                        console.log(data);
                    }
                });
                
            });


        });
        
    </script>
@endsection