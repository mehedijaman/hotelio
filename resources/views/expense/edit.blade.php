@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title text-light">
                            <a href="{{ asset('expense') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                            Update To Income Item
                        </h3>
                    </div>
                    {{ Form::open(array('url' => "/expense/".$Expenses->id,'method' => 'PATCH','class'=>'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Type" class="form-label col-md-3">Expense Category</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <select name="CategoryID" id="" class="form-select">
                                            <option value="">Select Category</option>
                                            @foreach($ExpenseCategoris as $Expense)
                                            @if ($Expenses->CategoryID == $Expense->id )
                                                <option value="{{ $Expense->id }}" selected> {{ $Expense->Name }} </option>
                                            @else
                                                <option value="{{ $Expense->id }}"> {{ $Expense->Name }} </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Amount" class="form-label col-md-3">Amount:</label>
                                <div class="col-md-8">
                                    <input type="number" name="Amount" class="form-control" value="{{$Expenses->Amount}}" > 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Description" class="form-label col-md-3">Description:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Description" class="form-control" value="{{$Expenses->Description}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Date" class="form-label col-md-3">Date:</label>
                                <div class="col-md-8">
                                    <input type="date" name="Date" class="form-control" value="{{ date('Y-m-d H:i:s',strtotime($Expenses->Date)) }}"> 
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