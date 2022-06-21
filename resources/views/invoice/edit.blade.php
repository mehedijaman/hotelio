@extends('layouts.app')
@section('content')
    <div class="container">
         {{-- <section class="button__list__show">
            <a href="{{ asset('invoice') }}" class="btn btn-info text-capitalize">List Invoice</a>
        </section> --}}
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card card-info">
                    <div class="card-header">
                        <h2 class="card-title">Update invoice</h2>
                    </div>

                    {{ Form::open(array('url' => '/invoice/'.$invoice->id, 'method' => 'PATCH','files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="GuestID" class="form-label">GuestID</label>
                                    <select type="number" name="GuestID" id=""  class="form-select">
                                        <option>Open this select menu</option>
                                        @foreach ($Guests as $Guest)
                                        <option value="{{ $Guest->id }}">
                                            {{ $Guest->Name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="TaxID" class="form-label">TaxID</label>
                                    <select type="number" name="TaxID" id=""  class="form-select">
                                        <option>Open this select menu</option>
                                        @foreach ($Taxs as $Tax)
                                            <option value="{{ $Tax->id }}">
                                                {{ $Tax->Name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="PaymentMethod" class="form-label">PaymentMethod</label>
                                    <input type="text" name="PaymentMethod" class="form-control" value="{{ $invoice->PaymentMethod }}"> 
                                </div>
                                <div class="col-md-6">
                                    <label for="Date" class="form-label">Date</label>
                                    <input type="text" name="Date" class="form-control" value="{{ $invoice->Date }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="SubTotal" class="form-label">SubTotal</label>
                                    <input type="number" name="SubTotal" class="form-control" value="{{ $invoice->SubTotal }}"> 
                                </div>
                                <div class="col-md-6">
                                    <label for="TaxTotal" class="form-label">TaxTotal</label>
                                    <input type="number" name="TaxTotal" class="form-control" value="{{ $invoice->TaxTotal }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="Total" class="form-label">Total</label>
                                    <input type="number" name="Total" class="form-control" value="{{ $invoice->Total }}">
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