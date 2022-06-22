@extends('layouts.app')
@section('content')
    <div class="container">
        {{-- <section class="button__list__show">
            <a href="{{ asset('invoiceItem') }}" class="btn btn-info text-capitalize">List invoiceItem</a>
        </section> --}}
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Update invoiceItem</h3>
                    </div>
                    {{ Form::open(array('url' => '/invoiceItem/'.$InvoiceItem->id, 'method' => 'PATCH', 'files' => true))}}
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="InvoiceID" class="form-label">InvoiceID</label>
                                    <select type="number" name="InvoiceID" id=""  class="form-select">
                                        <option>Open this select menu</option>
                                        @foreach ($Invoices as $Invoice)
                                            <option value="{{ $Invoice->id }}">
                                                {{ $Invoice->id}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="Name" class="form-label">Name</label>
                                    <input type="text" name="Name" class="form-control" value="{{ $InvoiceItem->Name }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="Description" class="form-label">Description</label>
                                    <input type="text" name="Description" class="form-control" value="{{ $InvoiceItem->Description }}"> 
                                </div>
                                <div class="col-md-6">
                                    <label for="Qty" class="form-label">Qty</label>
                                    <input type="number" name="Qty" class="form-control" value="{{ $InvoiceItem->Qty }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="UnitPrice" class="form-label">UnitPrice</label>
                                    <input type="number" name="UnitPrice" class="form-control" value="{{ $InvoiceItem->UnitPrice }}"> 
                                </div>
                                <div class="col-md-6">
                                    <label for="Price" class="form-label">Price</label>
                                    <input type="number" name="Price" class="form-control" value="{{ $InvoiceItem->Price }}"> 
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" id="" class="btn btn-info float-right w-25 text-capitalize" value="Update">
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection



