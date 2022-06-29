@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-10">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title text-light ">
                            <a href="{{ asset('employee') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-orange" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                            Update Employee
                        </h3>
                    </div>
                    {{ Form::Open(array('url' => '/employee/'.$Employees->id, 'method' => 'PATCH', 'class' => 'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row col-md-12">
                                <div class=" form-group row col-md-6">
                                    <label for="HotelID" class="form-label col-md-3">Hotel</label>
                                    <div class=" col-md-8">
                                        <select name="HotelID" id="" class="form-selec form-control" required>
                                            <option value="">Select Hotel</option>
                                            @foreach($Hotels as $Hotel)
                                                @if($Employees->HotelID == $Hotel->id)
                                                    <option value="{{ $Hotel->id }}" selected> {{ $Hotel->Name }} </option>
                                                @else
                                                    <option value="{{ $Hotel->id }}"> {{ $Hotel->Name }} </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Name" class="form-label col-md-3">Name :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Name" class="form-control" value="{{$Employees->Name}}"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                <div class="form-group row col-md-6" >
                                    <label for="Designation" class="form-label col-md-3">Designation :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Designation" class="form-control" value="{{$Employees->Designation}}"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="DateOfBirth" class="form-label col-md-3">Date Of Birth :</label>
                                    <div class="col-md-8">
                                        <input type="date" name="DateOfBirth" class="form-control" value="{{$Employees->DateOfBirth}}"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                <div class="form-group row col-md-6" >
                                    <label for="NIDNo" class="form-label col-md-3">NID No :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="NIDNo" class="form-control" value="{{$Employees->NIDNo}}"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="NID" class="form-label col-md-3">NID :</label>
                                    <div class="col-md-8">
                                        <input type="file" name="NID" class="form-control" value="{{$Employees->NID}}"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                <div class="form-group row col-md-6">
                                    <label for="Phone" class="form-label col-md-3">Phone :</label>
                                    <div class="col-md-8">
                                        <input type="tel" name="Phone" class="form-control" value="{{$Employees->Phone}}"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Email" class="form-label col-md-3">Email :</label>
                                    <div class="col-md-8">
                                        <input type="mail" name="Email" class="form-control" value="{{$Employees->Email}}"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                <div class="form-group row col-md-6">
                                    <label for="Address" class="form-label col-md-3">Address :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Address" class="form-control" value="{{$Employees->Address}}"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="DateOfJoin" class="form-label col-md-3">Date Of Join :</label>
                                    <div class="col-md-8">
                                        <input type="date" name="DateOfJoin" class="form-control" value="{{$Employees->DateOfJoin}}"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-3">Status :</label>
                                <div class="p-t-15">
                                    <label class="radio-container m-r-55">yes
                                        <input type="radio" name="Status" value="1" @if ($Employees->Status) checked @endif >
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">No
                                        <input type="radio" name="Status" value="0" @if (!$Employees->Status) checked @endif>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="submit" id="" class="btn bg-success float-right w-25 text-capitalize" value="Update">
                            </div>
                        </div>
                    {{ Form::close()}} 
                </div>
            </div>
        </div> 
    </div>
@endsection