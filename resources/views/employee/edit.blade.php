@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="/employee" class="btn btn-primary">Back to List</a>
        {!! Form::open(array('url' => '/employee/'.$Employees->id , 'method'=>'PATCH')) !!}

            <div class="page-wrapper  p-t-45 p-b-50">
                <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading bg-light">
                            <h2 class="title">Employee Registration Form</h2>
                            <hr style="width:100%;text-align:left;margin-left:0; background-color:red;">
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-row">
                                    <div class="name">Hotel</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <select name="HotelID" id="">
                                                <option value="">Select Hotel</option>
                                                @foreach($Hotels as $Hotel)
                                                <option value="{{ $Hotel->id }}"> {{ $Hotel->Name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Name</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Name" value="{{$Employees->Name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Designation</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Designation" value="{{$Employees->Designation}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Date Of Birth</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="date" name="DateOfBirth" value="{{$Employees->DateOfBirth}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">NID No</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="NIDNo" value="{{$Employees->NIDNo}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">NID Document</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="file" name="NID" value="{{$Employees->NID}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Phone</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Phone" value="{{$Employees->Phone}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Email</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="mail" name="Email" value="{{$Employees->Email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Address</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Address" value="{{$Employees->Address}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">DateOfJoin</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="date" name="DateOfJoin" value="{{$Employees->DateofJoin}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Status</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Status" value="{{$Employees->Status}}">
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
