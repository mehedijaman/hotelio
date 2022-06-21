@extends('layouts.app')
@section('content')

    <div class="container col-md-8">
         <section class="button__list__show mb-md-4">
            <a href="{{ asset('employee') }}" class="btn btn-md btn-info py-3 text-capitalize">Employee List</a>
        </section>
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Add Employee Informetion </h3>
                    </div>
                    {{ Form::open(array('url' => '/employee/'.$Employees->id ,'method' => 'PATCH','class'=>'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Type" class="form-label col-md-3">Hotel</label>
                                <div class="value">
                                    <div class="input-group">
                                        <select name="HotelID" id="" class="col-md-8">
                                            <option value="">Select Hotel</option>
                                            @foreach($Hotels as $Hotel)
                                            <option value="{{ $Hotel->id }}"> {{ $Hotel->Name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Name" class="form-label col-md-3">Name :</label>
                                <div class="col-md-8">
                                    <input type="text" name="Name" class="form-control" value="{{$Employees->Name}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Designation" class="form-label col-md-3">Designation :</label>
                                <div class="col-md-8">
                                    <input type="text" name="Designation" class="form-control" value="{{$Employees->Designation}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="DateOfBirth" class="form-label col-md-3">DateOfBirth :</label>
                                <div class="col-md-8">
                                    <input type="date" name="DateOfBirth" class="form-control" value="{{$Employees->DateOfBirth}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NIDNo" class="form-label col-md-3">NID No :</label>
                                <div class="col-md-8">
                                    <input type="text" name="NIDNo" class="form-control" value="{{$Employees->NIDNo}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NID" class="form-label col-md-3">NID :</label>
                                <div class="col-md-8">
                                    <input type="file" name="NID" class="form-control" value="{{$Employees->NID}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Email" class="form-label col-md-3">Email :</label>
                                <div class="col-md-8">
                                    <input type="mail" name="Email" class="form-control" value="{{$Employees->Email}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Address" class="form-label col-md-3">Address :</label>
                                <div class="col-md-8">
                                    <input type="text" name="Address" class="form-control" value="{{$Employees->Address}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="DateOfJoin" class="form-label col-md-3">DateOfJoin :</label>
                                <div class="col-md-8">
                                    <input type="date" name="DateOfJoin" class="form-control" value="{{$Employees->DateOfJoin}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-3">Status :</label>
                                <div class="p-t-15">
                                    <label class="radio-container m-r-55">yes
                                        <input type="radio" name="Status" value="{{$Employees->Status}}">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">No
                                        <input type="radio" name="Status" value="{{$Employees->Status}}">
                                        <span class="checkmark"></span>
                                    </label>
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
