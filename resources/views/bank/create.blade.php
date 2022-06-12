@extends('layouts.app')
@extends('layouts.Header')

@section('content')
    <div class="container-fluid">
        <a href="/bank" class="btn btn-primary">Back to List</a>
        {!! Form::open(array('url'=>'/bank' , 'method'=>'POST')) !!}
            <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
                <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading">
                            <h2 class="title">Bank Form</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-row">
                                    <div class="name">Name</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Branch</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Branch">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Account No</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="AccountNo">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Address</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Phone</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="tel" name="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Email</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="mail" name="Email">
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
                                    <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        {!! Form::close() !!}
    </div>
@endsection
