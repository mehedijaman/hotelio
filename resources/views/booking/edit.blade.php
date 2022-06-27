@extends('layouts.app')
@section('content')
    <div class="container py-5">
        {{-- <section class="button__list__show">
            <a href="{{ asset('booking') }}" class="btn btn-info text-capitalize">List Booking</a>
        </section> --}}
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-primary">
                     
                    <div class="card-header">
                       
                        <h3 class="card-title text-navy"> 
                            <a href="{{ asset('booking') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a> 
                            Booking Update
                        </h3>
                    </div>
                    {{ Form::Open(array('url' => '/booking/'.$Booking->id, 'method' => 'PATCH', 'class' => 'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="RoomID" class="form-label col-md-3">Room:</label>
                                <div class="col-md-8">
                                    <select type="number" name="RoomID" id=""  class="form-select">
                                        <option>Open this select menu</option>
                                        @foreach ($Rooms as $Room)
                                            <option value="{{ $Room->id }}">
                                                {{ $Room->id}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="GuestID" class="form-label col-md-3">Guest:</label>
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
                                 <label for="CheckInDate" class="form-label col-md-3">CheckInDate:</label>
                                <div class="col-md-8">
                                    <input type="date" name="CheckInDate" class="form-control" value="{{ date('mm-dd-Y',strtotime($Booking->CheckInDate))}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="CheckOutDate" class="form-label col-md-3">CheckOutDate:</label>
                                <div class="col-md-8">
                                    <input type="text" name="CheckOutDate" class="form-control" value="{{ $Booking->CheckOutDate}}">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" id="" class="btn bg-navy float-right w-25 text-capitalize" value="Update">
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
