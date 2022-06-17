@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="/guest" class="btn btn-primary">Back to List</a>
        {!! Form::open(array('url' => '/guest/'.$Guests->id , 'method'=>'PATCH')) !!}

            <div class="page-wrapper p-t-45 p-b-50">
                <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading bg-light">
                            <h2 class="title text-dark">Guest Registration Form</h2>
                            <hr style="width:100%;text-align:left;margin-left:0; background-color:red;">
                        </div>
                        <div class="card-body ">
                            <form method="POST" >
                                <div class="form-row">
                                    <div class="name">Name</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Name" value="{{$Guests->Name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Email</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="mail" name="Email" value="{{$Guests->Email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Address</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Address" value="{{$Guests->Address}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Phone</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="tel" name="Phone" value="{{$Guests->Phone}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">NID NO</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="NIDNo" value="{{$Guests->NIDNo}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">NID Documents</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="file" name="NID" value="{{$Guests->NID}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Passport No</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="PassportNo" value="{{$Guests->PassportNo}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Passport Documents</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="file" name="Passport" value="{{$Guests->Passport}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row p-t-20">
                                    <label class="label label--block">Guardian</label>
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Father
                                            <input type="radio" name="Father" value="{{$Guests->Father}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Mother
                                            <input type="radio" name="Mother" value="{{$Guests->Mother}}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Spouse</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Spouse" value="{{$Guests->Spouse}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Photo</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="file" name="Photo" value="{{$Guests->Photo}}">
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
