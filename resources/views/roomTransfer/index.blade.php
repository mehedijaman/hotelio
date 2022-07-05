@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-10 m-auto">
                @if (Session::get('Destroy'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icone fas fa-exclamation-triangle"></i> Deleted !</h5>
                        {{Session::get('Destroy')}}
                    </div>
                @endif
                @if (Session::get('DestroyAll'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icone fas fa-exclamation-triangle"></i> Deleted !</h5>
                        {{Session::get('DestroyAll')}}
                    </div>
                @endif
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
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/roomTransfer/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
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
                                        <td>{{ $RoomTransfer->Guest }}</td>
                                        <td class="" style="padding-left: 3rem !important">{{ $RoomTransfer->FromRoomID }} </td>
                                        <td style="padding-left: 2.2rem !important">{{ $RoomTransfer->Room }}</td>
                                        <td>
                                            @php
                                                echo date('d-m-Y',strtotime($RoomTransfer->Date))  
                                            @endphp
                                        </td>
                                        <td class="d-flex">
                                            <a class="" href="/roomTransfer/{{ $RoomTransfer->id }}/edit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                                <i class="fa-regular fa-pen-to-square mr-3 text-orange"></i></i>
                                            </a>
                                            {{ Form::open(array('url' => '/roomTransfer/'.$RoomTransfer->id,'method' => 'DELETE')) }}
                                                <button class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                    <i class="fa-regular fa-trash-can mr-3 text-danger"></i>
                                                </button>
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
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
                        {{ Form::open(array('url' => '/roomTransfer','method' => 'POST','class'=>'form-horizontal','id'=>'NewRoomTransferForm', 'files' => true)) }}

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
    </div>

    <script>
        $(document).ready(function(){
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
                    },
                    error:function (data){  
                        console.log('Error while adding new RoomTransfer' + data);
                    }
                });
            });
        });
        
    </script>
@endsection