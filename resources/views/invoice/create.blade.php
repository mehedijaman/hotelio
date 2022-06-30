@extends('layouts.app')
@section('content')
    <div class="container">
        {{ Form::Open(array('url' => '/booking','method' => 'POST','class' => 'form-horizontal', 'files' => true)) }}

        <div class="row">
            <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8 mt-4">
                            <div class="card">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <div class="col-md-4">
                                            <h3>Hotelio</h3>
                                            <p class="">
                                                Office 149, 450 South Brand Brooklyn
                                                San Diego County, CA 91905, 
                                                USA +1 (123) 456 7891, 
                                                +44 (876) 543 2198
                                            </p>
                                        </div>
                                        <div class="col-md-5 ml-auto">
                                            <div class="form-group row">
                                                <label for="" class="col-md-4 form-label">Invoice</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="Invoice">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="Date" class="col-md-4 form-label">Date</label>
                                                <div class="col-md-7">
                                                    <input type="date" class="form-control" name="Date">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="Date" class="col-md-4 form-label">Due Date</label>
                                                <div class="col-md-7">
                                                    <input type="date" class="form-control" name="Date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="bg-dark">
                                    <div class="d-flex">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="GuestID" class="form-label">GuestID</label>
                                                <input type="number" name="GuestID" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="TaxID" class="form-label">TaxID</label>
                                                <input type="number" name="TaxID" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-5 ml-auto">
                                            <div>
                                                <h5 class="py-2">Payment Details:</h5>
                                            </div>
                                            <div>
                                                <p class="m-0">Total Due:</p>
                                                <p class="m-0">Bank name:</p>
                                                <p class="m-0">IBAN:</p>
                                                <p class="m-0">Country:</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-md-3 mt-4 ml-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class=""> 
                                        <div class="py-2">
                                        <a href="" class="btn__navy__add__invoice bg-navy text-capitalize ml-1">Add Invoice</a>
                                    </div>
                                    <div class="py-4">
                                        <a href="" class="btn__navy__preview__invoice  text-capitalize ml-1 ">Preview Invoice</a>
                                    </div>
                                    <div class="py-2">
                                        <a href="" class="btn__navy__save__invoice  text-capitalize ml-1 ">Save Invoice</a>
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="" class="form-label text-sm">Accept Payment Via</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option  value="">Select Payment Method </option>
                                            <option value="1">Bkash</option>
                                            <option value="2">Nogad</option>
                                            <option value="3">Islamic Bank</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="co-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <input type="number"name="InvoiceID" class="form-control" placeholder="TypeInvoiceID">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text"name="Name" class="form-control"placeholder='Type Name'>
                                            </div>
                                            <div class="col-md-4">
                                                <textarea class="form-control" name="Description" placeholder="Type Description..." rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <input type="number"name="Qty" class="form-control" placeholder="Type Qty">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" name="UnitPrice" class="form-control"placeholder='Type UnitPrice'>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" name="Price" class="form-control"placeholder='Type Price'>
                                            </div>
                                            {{-- <div class="col-md-4">
                                                <textarea class="form-control" placeholder="Type Description..." rows="2"></textarea>
                                            </div> --}}
                                        </div>
                                       
                                    </div>

                                    {{-- <div class="col-md-6">
                                        
                                        </div> --}}
                                    </div>
                                </div>
                            </div>


                            <button class="btn btn-primary">Add item</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="co-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="col-md-6 mt-5">
                                        <div class="form-group row">

                                                <label for="" class="col-md-4 form-label">SalesPerson</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="SalesPerson">
                                                </div>
                                            </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group row">
                                            <label for="" class="col-md-4 form-label">SubTotal</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" name="SubTotal">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-md-4 form-label">TaxTotal</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" name="TaxTotal">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <hr class="bg-dark">
                                            <label for="" class="col-md-4 form-label">Total</label>

                                            <div class="col-md-7">
                                                
                                                <input type="text" class="form-control" name="Total">
                                            </div>
                                        </div>
                                    </div>

                                    
                                    
                                </div>
                                {{-- <hr class="bg-dark"> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection


