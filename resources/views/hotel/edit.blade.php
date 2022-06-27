@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title text-light">
                            <a href="{{ asset('hotel') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                            Update To Bank Data
                        </h3>
                    </div>
                    {{ Form::open(array('url' => '/hotel/'.$Hotels->id,'method' => 'PATCH','class'=>'form-horizontal', 'files' => true)) }}
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="Name" class="form-label col-md-3">Name :</label>
                            <div class="col-md-8">
                                <input type="text" name="Name" class="form-control" value="{{$Hotels->Name}}"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Title" class="form-label col-md-3">Title :</label>
                            <div class="col-md-8">
                                <input type="text" name="Title" class="form-control" value="{{$Hotels->Title}}"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Email" class="form-label col-md-3">Email :</label>
                            <div class="col-md-8">
                                <input type="mail" name="Email" class="form-control" value="{{$Hotels->Email}}"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Address" class="form-label col-md-3">Address :</label>
                            <div class="col-md-8">
                                <input type="text" name="Address" class="form-control" value="{{$Hotels->Address}}"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Phone" class="form-label col-md-3">Phone :</label>
                            <div class="col-md-8">
                                <input type="tel" name="Phone" class="form-control" value="{{$Hotels->Phone}}"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="RegNo" class="form-label col-md-3">Reg No :</label>
                            <div class="col-md-8">
                                <input type="text" name="RegNo" class="form-control" value="{{$Hotels->RegNo}}">  
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Logo" class="form-label col-md-3">Logo :</label>
                            <div class="col-md-8">
                                <input type="file" name="Logo" class="form-control" value="{{$Hotels->Logo}}"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Photo" class="form-label col-md-3">Photo :</label>
                            <div class="col-md-8">
                                <input type="file" name="Photo" class="form-control" value="{{$Hotels->Photo}}"> 
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" id="" class="btn bg-success float-right w-25 text-capitalize" value="Update">
                        </div>
                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
    
@endsection