@extends('layouts.app')
@section('content')
   
    <div class="container py-5">
        {{-- <section class="button mb-4">
            <a href="{{ asset('booking/create') }}" class="btn btn-info text-capitalize"> <i class="fa-solid fa-circle-plus mr-2"></i>Add</a>
        </section> --}}
        <div class="row">
            <div class="col-md-12">
                @if (Session::get('Destroy'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icone fas fa-exclamation-triangle"></i> Deleted !</h5>
                        {{Session::get('Destroy')}}
                    </div>
                @endif
                @if (Session::get('DestroyAll'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icone fas fa-exclamation-triangle"></i> Deleted !</h5>
                        {{Session::get('DestroyAll')}}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <button type="button" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Invoice"data-toggle="modal" data-target="#NewInvoiceModal"> 
                                    <i class="fa-solid fa-circle-plus mr-2"></i>
                                Add
                                </button> 
                                Invoice List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/invoice/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/invoice/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover  table-borderless ListTable" id="InvoiceList">
                            <thead>

                                <tr class="border-bottom">
                                    <th>Guest</th>
                                    <th>Tax</th>
                                    <th>PaymentMethod</th>
                                    <th>Date</th>
                                    <th>SubTotal</th>
                                    <th>TaxTotal</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            
                            <tbody>

                                {{-- @foreach ($invoices as $invoice)
                                    <tr class="border-bottom">
                                        <td>{{$invoice->Guest}}</td>
                                        <td>{{$invoice->Tax}}</td>
                                        <td>{{$invoice->PaymentMethod}}</td>
                                        <td>{{$invoice->Date}}</td>
                                        <td>{{$invoice->SubTotal}}</td>
                                        <td>{{$invoice->TaxTotal}}</td>
                                        <td>{{$invoice->Total}}</td>
                                        <td class="d-flex">
                                            <a class="" href="/invoice/{{ $invoice->id }}/edit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                                <i class="fa-regular fa-pen-to-square mr-3 text-orange"></i></i>
                                            </a>
                                            
                                            {{ Form::open(array('url' => '/invoice/'.$invoice->id,'method' => 'DELETE')) }}
                                                <button class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                    <i class="fa-regular fa-trash-can mr-3 text-danger"></i>
                                                </button>
                                            {{ Form::close() }} 
                                        </td>
                                    </tr>
                                @endforeach --}}

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        <div class="modal fade show" id="NewInvoiceModal" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add A New Invoice</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-footer">

                        {{ Form::Open(array('url' => '/invoice','method' => 'POST','class' => 'form-horizontal','id'=>'NewInvoiceForm', 'files' => true)) }}

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
                                        <input type="submit" name="Submit" value="Create a new invoice" id="FormSubmitBtn" class="btn btn-outline-primary text-capitalize">
                                    </div>
                                    <div class="col-md-1">
                                        <input type="submit" name="Submit" value="Reset" id="ResetBtnForm" class="btn btn-outline-primary   text-capitalize">
                                    </div>
                                </div>
                            </section>

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $.noConflict();
            var InvoiceList = $('#InvoiceList').DataTable({
                dom:'CBrfltip',
                serverSide:true,
                processing:true,
                colReorder:true,
                stateSave:true,
                responsive:true,
                buttons:[
                    {
                        extend:'copy',
                        text:'<button class="btn btn-primary"><i class="fa fa-copy"></i></button>',
                        titleAttr:'Copy Items',
                    },
                    {
                        extend:'excel',
                        text:'<button class="btn btn-success"><i class="fa fa-table"></i></button>',
                        titleAttr:'Export to Excel',
                        filename:'Invoice_List',
                    },
                    {
                        extend:'pdf',
                        text:'<button class="btn bg-purple"><i class="fa-solid fa-file-pdf"></i></button>',
                        titleAttr:'Export to Pdf',
                        filename:'Invoice_List',
                    },
                    {
                        extend:'csv',
                        text:'<button class="btn btn-info"><i class="fas fa-file-csv"></i></button>',
                        titleAttr:'Export to PDF',
                        filename:'Incvoice_List',
                    },
                    {
                        text:'<button class="btn btn-dark"><i class="fa-solid fa-file"></i></button>',
                        titleAttr:'Export To JSON',
                        filename:'Invoice_List',
                        action:function(e,dt,button,config){
                            var data = dt.buttons.exportData();
                            $.fn.dataTable.fileSave(
                                new Blob([JSON.stringify(data)])
                            );
                        },
                    },

                ],
                ajax:{
                    url:'/invoice',
                    type:'GET'
                },
                columns:[
                    {data:'Guest'},
                    {data:'Tax'},
                    {data:'PaymentMethod'},
                    {data:'Date'},
                    {data:'SubTotal'},
                    {data:'TaxTotal'},
                    {data:'Total'},
                    {data:'action',name:'action'}
                ],
            });

            $('#AddItemBtn').on('click',function(e){
                e.preventDefault();

                $('#ItemArea').append('<div class="form-group row"><div class="col-md-2"><input type="text" name="ItemName[]" class="form-control" placeholder="Item Name"></div><div class="col-md-3"><input type="text" name="ItemDescription[]" class="form-control" placeholder="Item Description"></div><div class="col-md-2"><input type="number" name="ItemQty[]" class="form-control" placeholder="Qty"></div><div class="col-md-2"><input type="number" name="ItemUnitPrice[]" class="form-control" placeholder="UnitPrice"></div><div class="col-md-2"><input type="number" name="ItemPrice[]" class="form-control" placeholder="Price"></div><div class="col-md-1"><button type="button" class="btn btn-danger" id="RemoveItemBtn"><i class="fa fa-minus"></i></button></div></div>');
            })

            $('body').on('click','#RemoveItemBtn',function(e){
                e.preventDefault();

                $(this).closest('.row').remove();
            });

            $('#ResetBtnForm').on('click',function(e){
                e.preventDefault();
                $('#NewInvoiceForm')[0].reset();
            });

            $('#FormSubmitBtn').on('click',function(e){
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "/invoice",
                    data: $('#NewInvoiceForm').serializeArray(),
                    success: function (data) {
                        $('#NewInvoiceForm')[0].reset();
                        $('#NewInvoiceModal').modal('hide');
                        Swal.fire(
                            'Success !',
                            data,
                            'success'
                         )
                    },
                    error:function(data)
                    {
                        console.log('Error While Adding new Invoice' +data);
                    }
                });

            });


        });
    </script>
@endsection
