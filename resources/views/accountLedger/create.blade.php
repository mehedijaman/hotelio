@extends('layouts.app')
@section('content')
    <div class="custom__container">
        <section class="button__list__show">
            <a href="{{ asset('accountLedger') }}" class="custom__btn__puple">List AccountLedger</a>
        </section>
        <section class="form__custom">
            <div class="row">
                <div class="col-md-6 m-auto custom__add__tb__bg">
                    <div class="custom__add__heading text-center">
                        <h2 class="">Add New AccountLedger</h5>
                    </div>
                    <div class="p-4">
                        <div class="row mb-3 mt-3">
                            <label for="Debit" class="form-label col-md-3">Debit:</label>
                            <div class="col-md-9">
                                <input type="number" name="Debit" class="form-control"> 
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label for="Credit" class="form-label col-md-3">Credit:</label>
                            <div class="col-md-9">
                                <input type="number" name="Credit" class="form-control"> 
                            </div>
                        </div>
                        
                        <div class="row mb-3 mt-3">
                            <label for="Date" class="form-label col-md-3">Date:</label>
                            <div class="col-md-9">
                                <input type="date" name="Date" class="form-control"> 
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label for="Method" class="form-label col-md-3">Method:</label>
                            <div class="col-md-9">
                                <input type="text" name="Method" class="form-control"> 
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label for="Description" class="form-label col-md-3">Description:</label>
                            <div class="col-md-9">
                                <input type="text" name="Description" class="form-control"> 
                            </div>
                        </div>
                        
                        <div class="col-md-3 ml-auto">
                            <div class="button__invoice">
                                <input type="submit" name="submit" id="" class="invioce__add__btn">
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
    </div>

@endsection
