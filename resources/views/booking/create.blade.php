@extends('layouts.app')
@section('content')
    <div class="container">
        <section class="button__list__show">
            <a href="{{ asset('booking') }}" class="btn btn-info text-capitalize">List Booking</a>
        </section>
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Add New Booking</h3>
                    </div>
                    {{ Form::Open(array('url' => '/booking','method' => 'POST','class' => 'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="RoomID" class="form-label col-md-3">RoomID:</label>
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
                                 <label for="CheckInDate" class="form-label col-md-3">CheckInDate:</label>
                                <div class="col-md-8">
                                    <input type="date" name="CheckInDate" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="CheckOutDate" class="form-label col-md-3">CheckOutDate:</label>
                                <div class="col-md-8">
                                    <input type="date" name="CheckOutDate" class="form-control"> 
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" id="" class="btn btn-defult float-right w-25" value="Reset">
                            <input type="submit" name="submit" id="" class="btn btn-info float-right w-25">
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection



