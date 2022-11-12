@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title text-navy">
                 <a href="{{ asset('room') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                Checkcout Page
            </h2>
        </div>

        {{ Form::open(array('url' => 'payment', 'method' => 'POST','class' => 'form-horizantal')) }}
            <div class="card-body pb-0">
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="Amount" class="form-label col-md-3">Amount</label>
                            <div class="col-md-8">
                                <input type="number" name="Amount" class="form-control">
                            </div>                         
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="TrxID" class="form-label col-md-3">TrxID</label>
                            <div class="col-md-8">
                                <input type="text" name="TrxID" class="form-control">
                            </div>                         
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="Product" class="form-label col-md-3">Product</label>
                            <div class="col-md-8">
                                <input type="text" name="Product" class="form-control">
                            </div>                         
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="CustomerName" class="form-label col-md-3">CustomerName</label>
                            <div class="col-md-8">
                                <input type="text" name="CustomerName" class="form-control">
                            </div>                         
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="CustomerEmail" class="form-label col-md-3">CustomerEmail</label>
                            <div class="col-md-8">
                                <input type="text" name="CustomerEmail" class="form-control">
                            </div>                         
                        </div>
                    </div>
                </div>              
            <div class="card-footer">
                <input type="submit" name="submit" value="Pay Via SSLCommerz" id="" class="btn bg-navy float-right w-25 text-capitalize">
            </div>
        {{ Form::close() }}
    </div>      
    </div>
   
@endsection
