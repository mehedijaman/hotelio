@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title text-navy">
                            <a href="{{ asset('bank') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                            Add New Bank
                        </h3>
                    </div>
                    {{ Form::open(array('url' => '/bank','method' => 'POST','class'=>'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Name" class="form-label col-md-3">Name:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Name" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Branch" class="form-label col-md-3">Branch:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Branch" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="AccountNo" class="form-label col-md-3">Account No:</label>
                                <div class="col-md-8">
                                    <input type="text" name="AccountNo" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Address" class="form-label col-md-3">Address:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Address" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Phone" class="form-label col-md-3">Phone:</label>
                                <div class="col-md-8">
                                    <input type="tel" name="Phone" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Email" class="form-label col-md-3">Email:</label>
                                <div class="col-md-8">
                                    <input type="mail" name="Email" class="form-control"> 
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="submit" id="" class="btn btn-danger float-right w-25 ml-2" value="Reset">
                                <input type="submit" name="submit" id="" class="btn bg-navy float-right w-25 text-capitalize">
                            </div>
                        </div>
                    {{ Form::close()}} 
                </div>
            </div>
        </div> 
    </div> 
@endsection