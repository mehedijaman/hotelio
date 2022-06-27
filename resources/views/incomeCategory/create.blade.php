@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title text-navy">
                            <a href="{{ asset('incomeCategory') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                            Add New Category
                        </h3>
                    </div>
                    {{ Form::open(array('url' => '/incomeCategory','method' => 'POST','class'=>'form-horizontal', 'files' => true)) }}
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="Name" class="form-label col-md-3">Name:</label>
                            <div class="col-md-8">
                                <input type="text" name="Name" class="form-control"> 
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" id="" class="btn btn-danger float-right w-25 ml-2" value="Reset">
                            <input type="submit" name="submit" id="" class="btn bg-navy float-right w-25 text-capitalize">
                        </div>
                    {{ Form::close()}} 
                </div>
            </div>
        </div> 
    </div> 
@endsection