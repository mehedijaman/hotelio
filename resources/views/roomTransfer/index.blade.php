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

         <div class="modal fade show" id="EditRoomTransferModal" role="dialog">
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

    <script src="{{ asset('js/custom-js/roomTransfer.js') }}"></script>
@endsection