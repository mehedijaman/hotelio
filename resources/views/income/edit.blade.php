@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-primary">

                        <div class="card-header">
                            <h3 class="card-title text-light">
                                <a href="{{ asset('income') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                                Update To Income Item
                            </h3>
                        </div>
                    {{ Form::open(array('url' => '/income/'.$Incomes->id,'method' => 'PATCH','class'=>'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Type" class="form-label col-md-3">Incomes Category</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <select name="CategoryID" id="" class="form-select">
                                            <option value="">Select Category</option>
                                            @foreach($IncomeCategoris as $IncomeCatagory)
                                            <option value="{{ $IncomeCatagory->id }}"> {{ $IncomeCatagory->Name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Amount" class="form-label col-md-3">Amount:</label>
                                <div class="col-md-8">
                                    <input type="number" name="Amount" class="form-control" value="{{$Incomes->Amount}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Description" class="form-label col-md-3">Description:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Description" class="form-control" value="{{$Incomes->Description}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Date" class="form-label col-md-3">Date:</label>
                                <div class="col-md-8">
                                    <input type="datetime-local" name="Date" class="form-control" value="{{$Incomes->Date}}"> 
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