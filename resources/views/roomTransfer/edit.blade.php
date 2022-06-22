@extends('layouts.app')
@section('content')

    <div class="container">
         {{-- <section class="button__list__show">
            <a href="{{ asset('roomTransfer') }}" class="btn btn-md btn-info py-3 text-capitalize">List RoomTransfer</a>
        </section> --}}
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Update RoomTransfer</h3>
                    </div>
                    {{ Form::open(array('url' => '/roomTransfer/'.$RoomTransfer->id,'method' => 'PATCH','class'=>'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="GuestID" class="form-label col-md-3">GuestID:</label>
                                <div class="col-md-8">
                                    <select type="number" name="GuestID" id=""  class="form-select">
                                        <option>Open this select menu</option>
                                        @foreach ($Guests as $Guest)
                                            <option value="{{ $Guest->id }}">
                                                {{ $Guest->Name }}
                                            </option>
                                        @endforeach
                                    </select> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="FromRoomID" class="form-label col-md-3">FromRoomID:</label>
                                <div class="col-md-8">
                                    <input type="number" name="FromRoomID" class="form-control" value="{{ $RoomTransfer->FromRoomID }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ToRoomID" class="form-label col-md-3">ToRoomID:</label>
                                <div class="col-md-8">
                                    <input type="number" name="ToRoomID" class="form-control" value="{{ $RoomTransfer->ToRoomID }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Date" class="form-label col-md-3">Date:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Date" class="form-control" value="{{ $RoomTransfer->Date }}"> 
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" id="" class="btn btn-info float-right w-25" value="Update">
                        </div>
                    {{ Form::close()}} 
                </div>
            </div>
        </div>
    </div>
@endsection