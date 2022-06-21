@extends('layouts.app')
@section('content')

    <div class="container">
         <section class="button__list__show mb-md-4">
            <a href="{{ asset('hotel') }}" class="btn btn-md btn-info py-3 text-capitalize">Hotel List</a>
        </section>
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Add Hote Informetion </h3>
                    </div>
                    {{ Form::open(array('url' => '/hotel','method' => 'POST','class'=>'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Name" class="form-label col-md-3">Name :</label>
                                <div class="col-md-8">
                                    <input type="text" name="Name" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Title" class="form-label col-md-3">Title :</label>
                                <div class="col-md-8">
                                    <input type="text" name="Title" class="form-control"> 
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
                                <label for="RegNo" class="form-label col-md-3">Reg No :</label>
                                <div class="col-md-8">
                                    <input type="text" name="RegNo" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Logo" class="form-label col-md-3">Logo :</label>
                                <div class="col-md-8">
                                    <input type="file" name="Logo" class="form-control"> 
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
