@extends('layouts.app')
@section('content')
    <div class="custom__container">
        <section class="button__list__show">
            <a href="{{ asset('booking') }}" class="custom__btn__puple">List Booking</a>
        </section>
        <section class="form__custom">
            <div class="row">
                <div class="col-md-6 m-auto custom__add__tb__bg">
                    <div class="custom__add__heading text-center">
                        <h2 class="">Add New Booking</h5>
                    </div>
                    <div class="p-4">
                        <div class="row mb-3 mt-3">
                            <label for="RoomID" class="form-label col-md-3">RoomID:</label>
                            <div class="col-md-9">
                                <input type="number" name="RoomID" class="form-control"> 
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label for="GuestID" class="form-label col-md-3">GuestID:</label>
                            <div class="col-md-9">
                                <input type="number" name="GuestID" class="form-control"> 
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label for="CheckInDate" class="form-label col-md-3">CheckInDate:</label>
                            <div class="col-md-9">
                                <input type="date" name="CheckInDate" class="form-control"> 
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label for="CheckOutDate" class="form-label col-md-3">CheckOutDate:</label>
                            <div class="col-md-9">
                                <input type="date" name="CheckOutDate" class="form-control"> 
                            </div>
                        </div>
                        
                        <div class="col-md-3 ml-auto">
                            <div class="button__invoice">
                                <input type="submit" name="submit" id="" class="invioce__add__btn">
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
    </div>

@endsection



