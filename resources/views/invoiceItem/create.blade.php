@extends('layouts.app')
@section('content')
    <div class="custom__container">
        <section class="button__list__show">
            <a href="{{ asset('invoice') }}" class="custom__btn__puple">List invoiceItem</a>
        </section>
        <section class="form__custom">
            <div class="row">
                <div class="col-md-8 m-auto custom__add__tb__bg">
                    <div class="custom__add__heading text-center">
                        <h2 class="">Add New Invoice Item</h5>
                    </div>
                    <div class="p-4">
                        <div class="row">
                           <div class="col-md-6">
                                <label for="InvoiceID" class="form-label">InvoiceID</label>
                                <select type="number" name="InvoiceID" id=""  class="form-select">
                                    <option>Open this select menu</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                           </div>
                           <div class="col-md-6">
                               <label for="Name" class="form-label">Name</label>
                                <input type="text" name="Name" class="form-control"> 
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                 <label for="Description" class="form-label">Description</label>
                                <input type="text" name="Description" class="form-control"> 
                            </div>
                            <div class="col-md-6">
                                <label for="Qty" class="form-label">Qty</label>
                                <input type="number" name="Qty" class="form-control"> 
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="UnitPrice" class="form-label">UnitPrice</label>
                                <input type="number" name="UnitPrice" class="form-control"> 
                            </div>
                            <div class="col-md-6">
                                <label for="Price" class="form-label">Price</label>
                                <input type="number" name="Price" class="form-control"> 
                            </div>
                        </div>
                        
                        <div class="col-md-3 ml-auto mt-3">
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



