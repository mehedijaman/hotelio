@extends('layouts.app')
@section('content')
    <div class="custom__container">
        <section class="button__list__show">
            <a href="{{ asset('balance') }}" class="custom__btn__puple">List Balance</a>
        </section>
        <section class="form__custom">
            <div class="row">
                <div class="col-md-6 m-auto custom__add__tb__bg">
                    <div class="custom__add__heading text-center">
                        <h2 class="">Add New Balance</h5>
                    </div>
                    <div class="p-4">
                        <div class="row mb-3 mt-3">
                            <label for="Date" class="form-label col-md-3">Date:</label>
                            <div class="col-md-9">
                                <input type="date" name="Date" class="form-control"> 
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label for="OpeningBalance" class="form-label col-md-3">OpeningBalance:</label>
                            <div class="col-md-9">
                                <input type="number" name="OpeningBalance" class="form-control"> 
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label for="ClosingBalance" class="form-label col-md-3">ClosingBalance:</label>
                            <div class="col-md-9">
                                <input type="number" name="ClosingBalance" class="form-control"> 
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
