@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-7 m-auto">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title text-navy">
                        <a href="{{ asset('balance') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                        Add New Booking
                    </h3>
                </div>
                {{ Form::Open(array('url' => '/balance','method' => 'POST','class' => 'form-horizontal', 'files' => true)) }}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="RoomID" class="form-label col-md-3">Acount ID:</label>
                        <div class="col-md-8">
                            <select type="number" name="AcountID" id="" class="form-select">
                                <option>Open this select menu</option>
                                @foreach ($AcountLeagers as $AcountLeager)
                                <option value="{{ $AcountLeager->id }}">
                                    {{ $AcountLeager->id }}
                                </option>
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
                    <div class="form-group row">
                        <label for="OpeningBalance" class="form-label col-md-3">Opening Balance:</label>
                        <div class="col-md-8">
                            <input type="number" name="OpeningBalance" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ClosingBalance" class="form-label col-md-3">Closing Balance:</label>
                        <div class="col-md-8">
                            <input type="number" name="ClosingBalance" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name text-black  col-sm-3 mx-3">Status</div>
                        <div class="Status">
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" name="Status" value="1">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="Status" value="0">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-3 col-sm-9">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">Remember me</label>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="submit" id="" class="btn bg-navy float-right w-25 text-capitalize">
                </div>
            </div>
            <!-- <div class="card-footer"> -->
            {{-- <input type="submit" name="submit" id="" class="btn btn-danger float-right w-25 ml-2" value="Reset"> --}}
            <!-- </div> -->
            {{ Form::close() }}
        </div>
    </div>
</div>
</div>
@endsection