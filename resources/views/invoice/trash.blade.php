<<<<<<< HEAD
=======
@extends('layouts.app')
@section('content')
    <div class="container">
         <section class="button mb-4">
            <a href="{{ asset('invoice') }}" class="btn btn-info text-capitalize">Back To list</a>
        </section>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title">
                            <h2 class="card-title">Invoice List</h2>
                        </div>
                        <a href="/invoice/emptyTrash" class="btn btn-sm bg-maroon float-right text-capitalize"><i class="fa-solid fa-trash-can mr-2"></i>Empty Trash</a>
                        <a href="/invoice/restoreAll" class="btn btn-sm bg-teal float-right text-capitalize mr-3"><i class="fa-solid fa-trash-arrow-up mr-2"></i>Restore All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>GuestID</th>
                                    <th>TaxID</th>
                                    <th>PaymentMethod</th>
                                    <th>SubTotal</th>
                                    <th>TaxTotal</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $invoice)
                                    <tr>
                                        <td>{{ $invoice->id }}</td>
                                        <td>{{ $invoice->GuestID }}</td>
                                        <td>{{ $invoice->TaxID }}</td>
                                        <td>{{ $invoice->PaymentMethod }}</td>
                                        <td>{{ $invoice->SubTotal }}</td>
                                        <td>{{ $invoice->TaxTotal }}</td>
                                        <td>{{ $invoice->Total }}</td>
                                        <td>
                                            {{-- Restore --}}
                                            <a href="/invoice/{{ $invoice->id }}/restore" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Restore"><i class="fa-solid fa-trash-arrow-up ml-2 text-success"></i></a>
                                            
                                            <a href="/invoice/{{ $invoice->id }}/parmanently/delete" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Parmanently Delete"><i class="fa-solid fa-trash-can ml-2 text-danger"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
>>>>>>> 1455991d4c7e43b0525a2057b63a42923ea0a442
