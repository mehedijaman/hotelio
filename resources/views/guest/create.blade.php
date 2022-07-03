@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12">
        <div class="row">
            <div class="col-md-7 m-auto col-md-11 mt-4">
                @if (Session::get('Success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-check"></i>Success!</h5>
                    {{Session::get('Success')}}
                </div>   
                @endif
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title text-light ">
                            <a href="{{ asset('guest') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-orange" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                            Add New Guest
                        </h3>
                    </div>
                    {{ Form::open(array('url' => '/guest','method' => 'POST','class'=>'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="col-md-12 form-group row">
                                <div class="form-group row col-md-6">
                                    <label for="Name" class="form-label col-md-3">Name :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="Name" class="form-control" placeholder="Enater Guset Name"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Email" class="form-label col-md-3">Email :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="mail" name="Email" class="form-control" placeholder="Enter Guest Mail"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group row">
                                <div class="form-group row col-md-6">
                                    <label for="Address" class="form-label col-md-3">Address :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="Address" class="form-control" placeholder="Enter Guest Address"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Phone" class="form-label col-md-3">Phone :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="tel" name="Phone" class="form-control" placeholder="Enter Guest Number"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group row">
                                <div class="form-group row col-md-6">
                                    <label for="NIDNo" class="form-label col-md-3">NID No :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="NIDNo" class="form-control" placeholder="Enter Guest NID NO"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="NID" class="form-label col-md-3">NID :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="file" name="NID" class="form-control"> 
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-12 form-group row">
                                <div class="form-group row col-md-6">
                                    <label for="PassportNo" class="form-label col-md-3">Passport No :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="PassportNo" class="form-control" placeholder="Enter Guest Passport NO"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Passport" class="form-label col-md-3">Passport :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="file" name="Passport" class="form-control"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group row">
                                <div class="form-group row col-md-6">
                                    <label for="Father" class="form-label col-md-3">Father :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="Father" class="form-control" placeholder="Enter Guest's Father Name "> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Mother" class="form-label col-md-3">Mother :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="Mother" class="form-control"  placeholder="Enter Guest's Mother Name "> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group row">
                                <div class="form-group row  col-md-6">
                                    <label for="Spouse" class="form-label col-md-3">Spouse :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="Spouse" class="form-control"> 
                                    </div>
                                </div>
                            
                                <div class="form-group row col-md-6">
                                    <label for="Photo" class="form-label col-md-3">Photo :</label>
                                    <div class="col-md-8  mx-md-2 ">
                                        <input type="file" name="Photo" class="form-control"> 
                                    </div>
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