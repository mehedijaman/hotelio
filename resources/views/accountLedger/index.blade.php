@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">
                @if (Session::get('Delete'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="fa-solid fa-xmark text-light fs-3 mx-1"></i> Delete!</h5>
                    {{Session::get('Delete')}}
                </div>
                @endif
                @if (Session::get('DeleteAll'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="fa-solid fa-xmark text-light fs-3 mx-1"></i> All Delete!</h5>
                    {{Session::get('DeleteAll')}}
                </div>
                @endif
            </div>
            <div class="card">
                <div class="card-header bg-defult">
                    <div class="card-title">
                        <h2 class="card-title">
                            <button type="button" class="btn bg-navy text-capitalize mr-3" data-toggle="modal" data-target="#AccountLedgerModal" id="AddNewBtn">
                                <i class="fa-solid fa-circle-plus mr-2"></i>
                                Add
                            </button>
                            AccountLedger List
                        </h2>
                    </div>
                    <a class="btn btn-sm bg-navy float-right text-capitalize" href="/acount/ledger/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                    <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/acount/ledger/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Debit</th>
                                <th>Credit</th>
                                <th>Date</th>
                                <th>Method</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($AccountLedgers as $AccountLedger)
                            <tr>
                                <td>{{$AccountLedger->Debit}}</td>
                                <td>{{$AccountLedger->Credit}}</td>
                                <td>{{$AccountLedger->Date}}</td>
                                <td>{{$AccountLedger->Method}}</td>
                                <td>{{$AccountLedger->Description}}</td>
                                <td class="d-flex">
                                    <a href="/acount/ledger/{{$AccountLedger->id}}" class="mr-3 text-purple" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View">
                                        <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye">
                                            <path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>
                                    <a class="mx-2" href="/acount/ledger/{{$AccountLedger->id}}/edit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">

                                        <i class="fa-regular fa-pen-to-square mr-3 text-orange"></i></i>
                                    </a>
                                    {{ Form::open(['url' => '/acount/ledger/'.$AccountLedger->id,'method' => 'DELETE'])}}
                                    <button class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">

                                        <i class="fa-regular fa-trash-can mr-3 text-black text-danger"></i>
                                    </button>
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
        <!-- style="padding-right: 17px; display: block;" aria-modal="true" -->
        <div class="col-md-7 m-auto">
            <div class="modal fade show" id="AccountLedgerModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h3 class="card-title">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa-solid fa-circle-arrow-left fs-5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i>
                                </button>
                            </h3>
                            Add Account Ledger
                        </div>
                        <div class="modal-body">
                            {{ Form::Open(array('url' => '/acount/ledger','method' => 'POST','class' => 'form-horizontal','id' => 'NewAccountLedgerForm', 'files' => true)) }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="Debit" class="form-label col-md-3">Debit:</label>
                                    <div class="col-md-8">
                                        <input type="number" name="Debit" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Credit" class="form-label col-md-3">Credit:</label>
                                    <div class="col-md-8">
                                        <input type="number" name="Credit" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Date" class="form-label col-md-3">Date:</label>
                                    <div class="col-md-8">
                                        <input type="date" class="form-control" id="Method" name="Date" placeholder="" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Method" class="form-label col-md-3">Method:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="Method" name="Method" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Description" class="form-label col-md-3">Description:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="Description" name="Description" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" col-sm-8 offset-sm-3">
                                        <button class="btn btn-default float-left w-25" id="ResetFormBtn">Reset</button>
                                        <input type="submit" name="submit" id="SubmitBtn" class="btn bg-navy float-right  w-25 text-capitalize">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#AddNewBtn').on('click', function(e) {
            e.preventDefault();
            $('#AccountLedgerModal').modal('show');
        });

        $('#ResetFormBtn').on('click', function(e) {
            e.preventDefault();

            $('#NewAccountLedgerForm')[0].reset();
        });

        $('#SubmitBtn').on('click', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url:  '/acount/ledger',
                data: $('#NewAccountLedgerForm').serializeArray(),
                success: function(data) {
                    $('#NewAccountLedgerForm')[0].reset();
                    $('#AccountLedgerModal').modal('hide');
                    Swal.fire(
                        'Success',
                        data,
                        'success'
                    )
                },
                error: function(data) {
                    console.log('Error While Adding New' + data);
                }
            });
        });
    });
</script>
@endsection