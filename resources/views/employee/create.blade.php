@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-10 ">
        <div class="row">
            <div class="col-md-12 m-auto ">

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
                            <a href="{{ asset('employee') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-orange" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                            Add New Employe
                        </h3>
                    </div>
                    {{ Form::open(array('url' => '/employee','method' => 'POST','class'=>'form-horizontal', 'files' => true , 'id' => 'createEmployee')) }}
                        <div class="card-body ">
                            <div class="form-group row col-md-12">
                                <div class="form-group row col-md-6">
                                    <label for="HotelID" class="form-label col-md-3">Hotel</label>
                                    <div class="col-md-8">
                                        <select name="HotelID" id="" class="form-select" required>
                                            <option value="">Select Hotel</option>
                                            @foreach($Hotels as $Hotel)
                                            <option value="{{ $Hotel->id }}"> {{ $Hotel->Name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Name" class="form-label col-md-3">Name :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Name" class="form-control"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                <div class="form-group row col-md-6">
                                    <label for="Designation" class="form-label col-md-3">Designation :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Designation" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="DateOfBirth" class="form-label col-md-3">Date Of Birth :</label>
                                    <div class="col-md-8">
                                        <input type="date" name="DateOfBirth" class="form-control"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                <div class="form-group row col-md-6">
                                    <label for="NIDNo" class="form-label col-md-3">NID No :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="NIDNo" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="NID" class="form-label col-md-3">NID :</label>
                                    <div class="col-md-8">
                                        <input type="file" name="NID" class="form-control"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                <div class="form-group row col-md-6">
                                    <label for="Phone" class="form-label col-md-3">Phone :</label>
                                    <div class="col-md-8">
                                        <input type="tel" name="Phone" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Email" class="form-label col-md-3">Email :</label>
                                    <div class="col-md-8">
                                        <input type="mail" name="Email" class="form-control"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                <div class="form-group row col-md-6">
                                    <label for="Address" class="form-label col-md-3">Address :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Address" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="DateOfJoin" class="form-label col-md-3">Date Of Join :</label>
                                    <div class="col-md-8">
                                        <input type="date" name="DateOfJoin" class="form-control"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-3">Status :</label>
                                <div class="p-t-15">
                                    <label class="radio-container m-r-55">yes
                                        <input type="radio" name="Status" value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">No
                                        <input type="radio" name="Status" value="0">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="submit" id="submitBtn" class="btn bg-navy float-right w-25 text-capitalize">
                                <button type="button" id="formResetBtn" class="btn btn-default ">Reset</button>
                            </div>
                        </div>
                    {{ Form::close()}} 
                </div>   
            </div>
        </div> 
    </div> 
    <script>
        $(document).ready(function(){
            $('#formResetBtn').on('click',function(e){
                e.preventDefault();
                $('#createEmployee')[0].reset();
            });
            $('#submitBtn').on('click',function(e){
                e.preventDefault();
                $.ajax({
                    type    : 'POST',
                    url     : '/employee',
                    data    : $('#createEmployee').serialize(),success:function(data){
                        $('#createEmployee')[0].reset();
                        alert(data);
                    },
                    error:function(data){
                        console.log('Error while adding new Bank'+data);
                    },
                });
            });
        });
    </script>
@endsection