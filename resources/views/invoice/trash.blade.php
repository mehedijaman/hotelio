@extends('layouts.app')
@section('content')
    <div class="container">
         {{-- <section class="button mb-4">
            <a href="{{ asset('invoice') }}" class="btn btn-info text-capitalize">Back To list</a>
        </section> --}}
        <div class="row py-5">
            <div class="col-md-12">
                 @if (Session::get('PermanentlyDelete'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icone fas fa-exclamation-triangle"></i> Deleted !</h5>
                        {{Session::get('PermanentlyDelete')}}
                    </div>
                @endif
                @if (Session::get('EmptyTrash'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icone fas fa-exclamation-triangle"></i> Deleted !</h5>
                        {{Session::get('EmptyTrash')}}
                    </div>
                @endif
                @if (Session::get('Restore'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Success !</h5>
                        {{Session::get('Restore')}}
                    </div>
                @endif
                @if (Session::get('RestoreAll'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Success !</h5>
                        {{Session::get('RestoreAll')}}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <a href="{{ asset('invoice') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                                Invoice Trash List
                            </h2>
                        </div>
                        <a href="/invoice/emptyTrash" class="btn btn-sm bg-maroon float-right text-capitalize"><i class="fa-solid fa-trash-can mr-2"></i>Empty Trash</a>
                        <a href="/invoice/restoreAll" class="btn btn-sm btn-success float-right text-capitalize mr-3"><i class="fa-solid fa-undo mr-2"></i>Restore All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover ">
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
                                @foreach ($Invoices as $Invoice)
                                    <tr>
                                        <td>{{ $Invoice->id }}</td>
                                        <td>{{ $Invoice->GuestID }}</td>
                                        <td>{{ $Invoice->TaxID }}</td>
                                        <td>{{ $Invoice->PaymentMethod }}</td>
                                        <td>{{ $Invoice->SubTotal }}</td>
                                        <td>{{ $Invoice->TaxTotal }}</td>
                                        <td>{{ $Invoice->Total }}</td>
                                        <td>
                                            {{-- Restore --}}
                                            <a href="/invoice/{{ $Invoice->id }}/restore" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Restore"><i class="fa-solid fa-undo ml-2 text-success"></i></a>
                                            
                                            <a href="/invoice/{{ $Invoice->id }}/parmanently/delete" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Parmanently Delete"><i class="fa-solid fa-trash-can ml-2 text-danger"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                           
                            
                        </table>
                         <div class="card-footer">
                                
                            </div>
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