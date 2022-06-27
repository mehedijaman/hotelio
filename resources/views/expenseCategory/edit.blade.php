@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title text-navy">
                            <a href="{{ asset('expenseCategory') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                           Update Category
                        </h3>
                    </div>
                    {{ Form::open(array('url' => "/expenseCategory/".$ExpenseCategoris->id,'method' => 'PATCH','class'=>'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Name" class="form-label col-md-3">Name:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Name" class="form-control" value="{{$ExpenseCategoris->Name}}"> 
                                </div>
                            </div>
                        </div>    
                        <div class="card-footer">
                            <input type="submit" name="submit" id="" class="btn btn-info float-right w-25 mx-md-3 px-md-2" value="Update">
                        </div>
                    {{ Form::close()}} 
                </div>
            </div>
        </div> 
    </div> 
@endsection