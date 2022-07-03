@extends('layouts.app')
@section('content')

    <div class="container py-5">
         {{-- <section class="button__list__show">
            <a href="{{ asset('roomTransfer') }}" class="btn btn-md btn-info py-3 text-capitalize">List RoomTransfer</a>
        </section> --}}
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="{{ asset('roomTransfer') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a> 
                            Update RoomTransfer
                        </h3>
                    </div>
                    {{ Form::open(array('url' => '/roomTransfer/'.$RoomTransfer->id,'method' => 'PATCH','class'=>'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="GuestID" class="form-label col-md-3">Guest:</label>
                                <div class="col-md-8">
                                    <select type="number" name="GuestID" id=""  class="form-select">
                                        <option value=""> Select Guest </option>
                                        @foreach ($Guests as $Guest)

                                            @if ($RoomTransfer->GuestID == $Guest->id) 
                                                <option value="{{ $Guest->id }}" selected>
                                                {{ $Guest->Name }}
                                                </option>
                                            @endif

                                        @endforeach
                                    </select> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="FromRoomID" class="form-label col-md-3">FromRoom:</label>
                                <div class="col-md-8">
                                    <input type="number" name="FromRoomID" class="form-control" value="{{ $RoomTransfer->FromRoomID }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ToRoomID" class="form-label col-md-3">ToRoom:</label>
                                <div class="col-md-8">
                                    <select type="number" name="ToRoomID" id=""  class="form-select">
                                        <option value="">Room Select</option>
                                        
                                        @foreach ($Rooms as $Room)
                                            @if ($RoomTransfer->ToRoomID == $Room->id)
                                                <option value="{{ $Room->id }}" selected>
                                                    {{ $Room->RoomNo }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select> 
                                </div>
                                {{-- <div class="col-md-8">
                                    <input type="number" name="ToRoomID" class="form-control" value="{{ $RoomTransfer->ToRoomID }}"> 
                                </div> --}}
                            </div>
                            <div class="form-group row">
                                <label for="Date" class="form-label col-md-3">Date:</label>
                                <div class="col-md-8">
                                    <input type="date" name="Date" class="form-control" value="{{ date('d-m-Y',strtotime($RoomTransfer->Date)) }}"> 
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" id="" class="btn bg-navy float-right w-25" value="Update">
                        </div>
                    {{ Form::close()}} 
                </div>
            </div>
        </div>
    </div>
@endsection