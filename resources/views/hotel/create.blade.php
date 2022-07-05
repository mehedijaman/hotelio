@extends('layouts.app')
@section('content')
    {{-- <div class="container py-5">
        <div class="row">
            <div class="col-md-7 m-auto">
                @if(Session::get('Success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Success!</h5>
                    {{ Session::get('Success') }}
                </div>
                @endif

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title text-navy">
                            <a href="{{ asset('hotel') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                            Add New Bank
                        </h3>
                    </div>
                    {{ Form::open(array('url' => '/hotel','method' => 'POST','class'=>'form-horizontal', 'id' => 'NewHotelForm' ,'files' => true)) }}
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
                                <!-- <input type="submit" name="submit" id="" class="btn btn-danger float-right w-25 ml-2" value="Reset"> -->
                                <input type="submit" name="submit" id="SubmitBtn" class="btn bg-navy float-right w-25 text-capitalize">
                                <button type="button" id="ResetFormBtn" class="btn btn-default ">Reset</button>
                            </div>
                    {{ Form::close()}} 
                </div>
            </div>
        </div> 
    </div>

    <script>
        $(document).ready(function(){
            $('#ResetFormBtn').on('click',function(e){
                e.preventDefault();

                $('#NewHotelForm')[0].reset();
            });

            $('#SubmitBtn').on('click',function(e){
                e.preventDefault();

                $.ajax({
                    type:'POST',
                    url:'/hotel',
                    data: $('#NewHotelForm').serialize(),
                    success:function(data){
                        $('#NewHotelForm')[0].reset();
                        alert(data);
                    },
                    error:function(data){
                        console.log('Error while adding new hotel' + data);
                    }
                });

            });
        });
    </script> --}}


    
@endsection