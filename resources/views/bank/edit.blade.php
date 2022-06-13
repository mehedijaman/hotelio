@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="/bank" class="btn btn-primary">Back to List</a>
        {!! Form::open(array('url'=>'/bank/update' , 'method'=>'POST')) !!}
        <input type="hidden" name="id" value ="{{$Banks->id}}">
            <div class="page-wrapper  p-t-45 p-b-50">
                <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading bg-light">
                            <h2 class="title text-dark">Update Bank Form</h2>
                            <hr style="width:100%;text-align:left;margin-left:0; background-color:red;">
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-row">
                                    <div class="name">Name</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Name" value="{{$Banks->Name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Branch</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Branch" value="{{$Banks->Branch}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Account No</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="AccountNo" value="{{$Banks->AccountNo}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Address</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Address" value="{{$Banks->Address}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Phone</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="tel" name="Phone" value="{{$Banks->Phone}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Email</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="mail" name="Email" value="{{$Banks->Email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row p-t-20">
                                    <label class="label label--block">Are you an existing customer?</label>
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Yes
                                            <input type="radio" checked="checked" name="exist">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" name="exist">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn--radius-2 btn-lg btn-block bg-info" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        {!! Form::close() !!}
    </div>
@endsection
