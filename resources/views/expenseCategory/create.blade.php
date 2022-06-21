@extends('layouts.app')
@section('content')

    <div class="container">
         <section class="button__list__show mb-md-4">
            <a href="{{ asset('expenseCategory') }}" class="btn btn-md btn-info py-3 text-capitalize">List Expense Category</a>
        </section>
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Add New Catergory</h3>
                    </div>
                    {{ Form::open(array('url' => '/expenseCategory','method' => 'POST','class'=>'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Name" class="form-label col-md-3">Name:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Name" class="form-control"> 
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
