@extends('layouts.app')
@section('content')
    <div class="container">
        {{ Form::Open(array('url' => '/invoice','method' => 'POST','class' => 'form-horizontal', 'files' => true)) }}

            <section class="invoice__section pt-3">

                @if (Session::get('Success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                        {{Session::get('Success')}}
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col-md-1">
                                <a href="{{ asset('invoice') }}" class=" btn btn-outline-primary "><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="GuestID" id="GuestID" class="form-control" required>
                                        <option value="">Select Guest</option>
                                        @foreach($Guests as $Guest)
                                        <option value="{{ $Guest->id }}">{{ $Guest->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select name="TaxID" id="TaxID" class="form-control" required>
                                    <option value="">Select Tax</option>
                                    @foreach($Taxs as $Tax)
                                    <option value="{{ $Tax->id }}">{{ $Tax->Name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name="Date" required>
                            </div>

                        </div>
                        {{-- <hr class="bg-dark">               --}}
                    </div>                                
                </div>
                    
            </section>

            <section class="row invoice__item__section m-0 p-0 pb-2">
                
                <div class="card">
                    <div class="card-body">
                        <div class="row" id="ItemArea">
                            
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <input type="text" name="ItemName[]" class="form-control"placeholder='Item Name' required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="ItemDescription[]" class="form-control" placeholder="Item Description">
                                </div>
                                <div class="col-md-2">
                                    <input type="number"name="ItemQty[]" class="form-control" placeholder="Qty" required>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="ItemUnitPrice[]" class="form-control"placeholder='UnitPrice' required>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="ItemPrice[]" class="form-control"placeholder='Price' required>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-primary" id="AddItemBtn"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                    
            </section>

            <section class="invoice__total_&_payment__section">
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group row">
                            <label for="" class="col-md-4 form-label">SubTotal</label>
                            <div class="col-md-7">
                                <input type="number" class="form-control" name="SubTotal">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 form-label">TaxTotal</label>
                            <div class="col-md-7">
                                <input type="number" class="form-control" name="TaxTotal">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 form-label">Total</label>
                            <div class="col-md-7">                                
                                <input type="number" class="form-control" name="Total">
                            </div>
                        </div>

                    </div>
                    
                    <div class="col-md-6">

                        <div class="form-group row">
                            <label for="" class="col-md-4 form-label">Payment Method</label>
                            <div class="col-md-7">
                                <select name="PaymentMethod" id="PaymentMethod" class="form-control" required>
                                    <option value="">Select Payment Method</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Bank">Bank</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <hr class="bg-dark">  

            <section class="button pt-1">
                <div class="row">
                    <div class="col-md-3 ml-auto">
                        <input type="submit" name="Submit" value="Create a new invoice" id="FormSubmitBtn" class="btn btn-outline-primary   text-capitalize">
                    </div>
                </div>
            </section>
        {{ Form::close() }}
    </div>

    <script>
        $(document).ready(function(){
            $('#AddItemBtn').on('click',function(e){
                e.preventDefault();

                $('#ItemArea').append('<div class="form-group row"><div class="col-md-2"><input type="text" name="ItemName[]" class="form-control" placeholder="Item Name"></div><div class="col-md-3"><input type="text" name="ItemDescription[]" class="form-control" placeholder="Item Description"></div><div class="col-md-2"><input type="number" name="ItemQty[]" class="form-control" placeholder="Qty"></div><div class="col-md-2"><input type="number" name="ItemUnitPrice[]" class="form-control" placeholder="UnitPrice"></div><div class="col-md-2"><input type="number" name="ItemPrice[]" class="form-control" placeholder="Price"></div><div class="col-md-1"><button type="button" class="btn btn-danger" id="RemoveItemBtn"><i class="fa fa-minus"></i></button></div></div>');
            })

            $('body').on('click','#RemoveItemBtn',function(e){
                e.preventDefault();

                $(this).closest('.row').remove();
            });


        });
    </script>
@endsection


