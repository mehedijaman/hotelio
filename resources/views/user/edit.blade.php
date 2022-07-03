@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-md-10 m-auto">
                @if (Session::get('Success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                        {{Session::get('Success')}}
                    </div>
                @endif
                
                <div class="card card-primary">
                    <div class="card-header">
                        <h2 class="card-title text-navy">
                             <a href="{{ asset('user') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                            User Update
                        </h2>
                    </div>

                    {{ Form::open(array('url' => 'user', 'method' => 'POST','class' => 'form-horizantal','files' => true)) }}
                        <div class="card-body pb-0">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="EmployeeID" class="form-label col-md-4">Employee:</label>
                                        <div class="col-md-7">
                                            <select type="number" name="EmployeeID" id=""  class="form-select" required>
                                                <option value="">Select Employee </option>
                                                {{-- @foreach ()
                                                <option value="">
                                                   
                                                </option>
                                                @endforeach --}}
                                            </select>
                                        </div>  
                                    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="name" class="form-label col-md-4">Name:</label>
                                        <div class="col-md-7">
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="email" class="form-label col-md-4">Email:</label>
                                        <div class="col-md-7">
                                            <input type="text" name="email" class="form-control" required> 
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="LastLogin" class="form-label col-md-4">LastLogin:</label>
                                        <div class="col-md-7">
                                            <input type="LastLogin" name="LastLogin" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                           <div class="form-group row">
                               <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="" class="form-label col-md-4">Role: </label>
                                        <div class="col-md-7">
                                            <select name="" id="" class="form-select">
                                                <option value="">Select Role...</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Admin">User</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="Photo" class="form-label col-md-4">Photo:</label>
                                        <div class="col-md-7">
                                            <input type="file" name="Photo" class="form-control" > 
                                        </div>
                                    </div>
                                    
                                </div>
                                
                           </div>
                        </div>
                        <div class="card-footer">
                            {{-- <input type="submit" name="submit" id="" class="btn btn-danger float-right w-25 text-capitalize" value="Reset"> --}}
                            <input type="submit" name="submit" id="" class="btn bg-navy float-right w-25 text-capitalize">
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection