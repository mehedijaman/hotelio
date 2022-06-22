@extends('layouts.app')
@section('content')

    <div class="container">
         <section class="button__list__show mb-md-4">
            <a href="{{ asset('bank') }}" class="btn btn-md btn-info py-3 text-capitalize">Bank List</a>
        </section>
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Update New Bank</h3>
                    </div>
                    {{ Form::open(array('url' => '/bank/'.$Banks->id,'method' => 'PATCH','class'=>'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Name" class="form-label col-md-3">Name:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Name" class="form-control" value="{{$Banks->Name}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Branch" class="form-label col-md-3">Branch:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Branch" class="form-control" value="{{$Banks->Branch}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="AccountNo" class="form-label col-md-3">Account No:</label>
                                <div class="col-md-8">
                                    <input type="text" name="AccountNo" class="form-control" value="{{$Banks->AccountNo}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Address" class="form-label col-md-3">Address:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Address" class="form-control" value="{{$Banks->Address}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Phone" class="form-label col-md-3">Phone:</label>
                                <div class="col-md-8">
                                    <input type="tel" name="Phone" class="form-control" value="{{$Banks->Phone}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Email" class="form-label col-md-3">Email:</label>
                                <div class="col-md-8">
                                    <input type="mail" name="Email" class="form-control" value="{{$Banks->Email}}"> 
                                </div>
                            </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" id="" class="btn btn-danger float-right w-25" value="Reset">
                            <input type="submit" name="submit" id="" class="btn btn-info float-right w-25 mx-md-3 px-md-2" value="Update">
                        </div>
                    {{ Form::close()}} 
                </div>
            </div>
        </div>
    </div>
@endsection
