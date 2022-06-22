@extends('layouts.app')
@section('content')

    <div class="container">
         <section class="button__list__show mb-md-4">
            <a href="{{ asset('expense') }}" class="btn btn-md btn-info py-3 text-capitalize">List Expense </a>
        </section>
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Add New Expense Item</h3>
                    </div>
                    {{ Form::open(array('url' => '/expense','method' => 'POST','class'=>'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Type" class="form-label col-md-8">Expense Category</label>
                                <div class="value">
                                    <div class="input-group">
                                        <select name="CategoryID" id="" class="col-md-8">
                                            <option value="">Select Category</option>
                                            @foreach($ExpenseCategoris as $Expense)
                                            <option value="{{ $Expense->id }}"> {{ $Expense->Name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Amount" class="form-label col-md-3">Amount:</label>
                                <div class="col-md-8">
                                    <input type="number" name="Amount" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Description" class="form-label col-md-3">Description:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Description" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Date" class="form-label col-md-3">Date:</label>
                                <div class="col-md-8">
                                    <input type="date" name="Date" class="form-control"> 
                                </div>
                            </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" id="" class="btn btn-danger float-right w-25" value="Reset">
                            <input type="submit" name="submit" id="" class="btn btn-info float-right w-25 mx-md-3 px-md-2">
                        </div>
                    {{ Form::close()}} 
                </div>
            </div>
        </div>
    </div>
@endsection
