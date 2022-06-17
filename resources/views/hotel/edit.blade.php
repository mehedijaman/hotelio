@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="/hotel" class="btn btn-primary">Back to List</a>
        {!! Form::open(array('url' => '/hotel/'.$Hotels->id , 'method'=>'PATCH')) !!}
        
            <div class="page-wrapper p-t-45 p-b-50">
                <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading bg-light">
                            <h2 class="title text-dark">Hotel Registration Form</h2>
                            <hr style="width:100%;text-align:left;margin-left:0; background-color:red;">
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-row">
                                    <div class="name">Name</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Name" value="{{$Hotels->Name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Title</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Title" value="{{ $Hotels->Title }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Email</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="email" name="Email" value="{{$Hotels->Email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Address</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Address" value="{{$Hotels->Address}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Phone</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="tel" name="Phone" value="{{$Hotels->Phone}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Registration Number</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="RegNo" value="{{$Hotels->RegNo}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Logo</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="file" name="Logo" value="{{$Hotels->Logo}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Photo</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="file" name="Photo" value="{{$Hotels->Photo}}">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <button class="btn btn--radius-2 btn-lg btn-block bg-gray" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        {!! Form::close() !!}
    </div>
@endsection
