@extends('layouts.app')
@section('content')

    <div class="container py-5">
        <div class="row">
            <div class="col-md-7 m-auto">
                @if (Session::get('Success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                        {{Session::get('Success')}}
                    </div>
                @endif
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title text-navy">
                            <a href="{{ asset('roomTransfer') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                            Add New RoomTransfer
                        </h3>
                    </div>
                    {{ Form::open(array('url' => '/roomTransfer','method' => 'POST','class'=>'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="GuestID" class="form-label col-md-3">Guest:</label>
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
                                <label for="FromRoomID" class="form-label col-md-3">FromRoom:</label>
                                <div class="col-md-8">
                                    <input type="number" name="FromRoomID" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ToRoomID" class="form-label col-md-3">ToRoom</label>
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
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" id="" class="btn bg-navy float-right w-25 text-capitalize">
                        </div>
                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection



