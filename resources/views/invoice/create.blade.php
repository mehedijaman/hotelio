@extends('layouts.app')
@section('content')
    <div class="custom__container">
        <section class="button__list__show">
            <a href="{{ asset('invoice') }}" class="custom__btn__puple">List Invoice</a>
        </section>
        <section class="form__custom">
            <div class="row">
                <div class="col-md-8 m-auto custom__add__tb__bg">
                    <div class="custom__add__heading text-center">
                        <h2 class="">Add New Invoice</h5>
                    </div>
                    <div class="p-4">
                        {{ Form::open(array('url' => 'invoice', 'method' => 'POST', 'files' => true)) }}
                            <div class="row">
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
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="PaymentMethod" class="form-label">PaymentMethod</label>
                                    <input type="text" name="PaymentMethod" class="form-control"> 
                                </div>
                                <div class="col-md-6">
                                    <label for="Date" class="form-label">Date</label>
                                    <input type="Date" name="Date" class="form-control"> 
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="SubTotal" class="form-label">SubTotal</label>
                                    <input type="number" name="SubTotal" class="form-control"> 
                                </div>
                                <div class="col-md-6">
                                    <label for="TaxTotal" class="form-label">TaxTotal</label>
                                    <input type="number" name="TaxTotal" class="form-control"> 
                                </div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="Total" class="form-label">Total</label>
                                <input type="number" name="Total" class="form-control"> 
                            </div>
                            <div class="col-md-3 ml-auto">
                                <div class="button__invoice">
                                    <input type="submit" name="su   bmit" id="" class="invioce__add__btn">
                                </div>
                            </div>
                        {{ Form::close() }}    
                    </div>
                   
                </div>
            </div>
        </section>
    </div>

@endsection



