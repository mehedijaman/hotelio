@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title text-navy">
                 <a href="{{ asset('room') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                Send SMS
            </h2>
        </div>

        {{ Form::open(array('url' => 'sms/send', 'method' => 'POST','class' => 'form-horizantal')) }}
            <div class="card-body pb-0">
                <!-- <div class="form-group">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="Number" class="form-label col-md-3">Number</label>
                            <div class="col-md-8">
                                <input type="text" name="Number" class="form-control" placeholder="Destination number">
                            </div>                         
                        </div>
                    </div>
                </div> -->
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="Number" class="form-label col-md-3">Number</label>
                            <div class="col-md-8">
                                <select name="Numbers" id="" class="form-control">
                                    <option value="Employee">All Employee</option>
                                    <option value="Customer">All Customers</option>
                                </select>
                            </div>                         
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="Message" class="form-label col-md-3">Message</label>
                            <div class="col-md-8">
                                <textarea name="Message" id="Message" class="form-control" cols="30" rows="10" placeholder="Your Message here..."></textarea>
                            </div>
                        </div>                       
                    </div>
                </div>         
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" value="Send" id="" class="btn bg-navy float-right w-25 text-capitalize">
            </div>
        {{ Form::close() }}
    </div>      
    </div>
@endsection
