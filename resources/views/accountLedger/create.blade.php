@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-7 m-auto">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title text-navy">
                        <a href="{{ asset('/acount/ledger') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                        Add New Booking
                    </h3>
                </div>
                {{ Form::Open(array('url' => '/acount/ledger','method' => 'POST','class' => 'form-horizontal', 'files' => true)) }}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="Debit" class="form-label col-md-3">Debit:</label>
                        <div class="col-md-8">
                            <input type="number" name="Debit" class="form-control" placeholder="Debit Balance">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Credit" class="form-label col-md-3">Credit:</label>
                        <div class="col-md-8">
                            <input type="number" name="Credit" class="form-control" placeholder="Credit Balance">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Date" class="form-label col-md-3">Date:</label>
                        <div class="col-md-8">
                            <input type="date" class="form-control" id="Method" name="Date" placeholder="Date">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Method" class="form-label col-md-3">Method:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="Method" name="Method" placeholder="Method">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Description" class="form-label col-md-3">Description:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="Description" name="Description" placeholder="Description">
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
                    <a href="{{ asset('/acount/ledger') }}" class="btn btn-default float-left">Cancel</a>
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