@extends('layouts.app')
@section('content')

    <div class="container">
         <section class="button__list__show mb-md-4">
            <a href="{{ asset('guest') }}" class="btn btn-md btn-info py-3 text-capitalize">Guest List</a>
        </section>
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Add Guest Informetion </h3>
                    </div>
                    {{ Form::open(array('url' => '/guest','method' => 'POST','class'=>'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Name" class="form-label col-md-3">Name :</label>
                                <div class="col-md-8">
                                    <input type="text" name="Name" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Email" class="form-label col-md-3">Email :</label>
                                <div class="col-md-8">
                                    <input type="mail" name="Email" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Address" class="form-label col-md-3">Address :</label>
                                <div class="col-md-8">
                                    <input type="text" name="Address" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Phone" class="form-label col-md-3">Phone :</label>
                                <div class="col-md-8">
                                    <input type="tel" name="Phone" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NIDNo" class="form-label col-md-3">NID No :</label>
                                <div class="col-md-8">
                                    <input type="text" name="NIDNo" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NID" class="form-label col-md-3">NID :</label>
                                <div class="col-md-8">
                                    <input type="file" name="NID" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="PassportNo" class="form-label col-md-3">Passport No :</label>
                                <div class="col-md-8">
                                    <input type="text" name="PassportNo" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Passport" class="form-label col-md-3">Passport :</label>
                                <div class="col-md-8">
                                    <input type="file" name="Passport" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-3">Guardian :</label>
                                <div class="p-t-15">
                                    <label class="radio-container m-r-55">Father
                                        <input type="radio" name="Father">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Mother
                                        <input type="radio" name="Mother">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Spouse" class="form-label col-md-3">Spouse :</label>
                                <div class="col-md-8">
                                    <input type="text" name="Spouse" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Photo" class="form-label col-md-3">Photo :</label>
                                <div class="col-md-8">
                                    <input type="file" name="Photo" class="form-control"> 
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="submit" id="" class="btn btn-danger float-right w-25" value="Reset">
                                <input type="submit" name="submit" id="" class="btn btn-info float-right w-25 mx-md-3 px-md-2">
                            </div>
                    {{ Form::close()}} 
                </div>
            </div>
        </div>
    </div>
@endsection
