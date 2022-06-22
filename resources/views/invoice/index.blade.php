
{{-- @section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
@endsection  --}}
@extends('layouts.app')
@section('content')
    <div class="container">
         <section class="button mb-4">
            <a href="{{ asset('invoice/create') }}" class="btn btn-info text-capitalize">Add Invoice</a>
        </section>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title">
                            <h2 class="card-title">Invoice List</h2>
                        </div>
                        <a class="btn btn-sm bg-fuchsia float-right text-capitalize" href="/invoice/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/invoice/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
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
                                            <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye"><path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle></svg>
                                            <span class="dropdown">
                                                <button class="" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical"><circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle><circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle><circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
                                                </svg></button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="/invoice/{{ $invoice->id }}/edit"><i class="fa-regular fa-pen-to-square mr-2 text-orange"></i></i>Edit</a></li>

                                                    {{ Form::open(array('url' => '/invoice/'.$invoice->id,'method' => 'DELETE')) }}
                                                        <button class="dropdown-item"><i class="fa-regular fa-trash-can mr-2 text-danger"></i>Delete</button>
                                                    {{ Form::close() }}
                                                </ul>
                                            </span>
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

{{-- <script type="text/javascript">
        $.noConflict();
        $(document).ready( function () {
            $('#myTable').DataTable();
        });
</script> --}}

{{-- @push('scripts')
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
    </script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script>
        $.noConflict();
        $(document).ready( function () {
            $('#myTable').DataTable();
        });
    </script>
@endpush --}}