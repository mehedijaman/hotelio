@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header bg-defult">
                    <div class="card-title">
                        <h2 class="card-title">
                            <button type="button" class="btn bg-navy text-capitalize mr-3" data-toggle="modal" data-target="#BankLedgerModal" id="AddNewBtn">
                                <i class="fa-solid fa-circle-plus mr-2"></i>
                                Add
                            </button>
                            Add Bank Ledger
                        </h2>
                    </div>
                    <a class="btn btn-sm bg-navy float-right text-capitalize" href="bankLedger/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                    <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/balance/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap ListTable">
                        <thead>
                            <tr>
                                <th>Bank</th>
                                <th>Deposit</th>
                                <th>Withdraw</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($BankLedgers as $BankLedger)
                            <tr>
                                <td>{{$BankLedger->Bank}}</td>
                                <td>{{$BankLedger->Deposit}}</td>
                                <td>{{$BankLedger->Withdraw}}</td>
                                <td>{{$BankLedger->Date}}</td>
                                <td>{{$BankLedger->Description}}</td>
                                <td class="d-flex">
                                    <a class="mx-2" href="/bankLedger/{{$BankLedger->id}}/edit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">

                                        <i class="fa-regular fa-pen-to-square mr-3 text-black text-orange"></i></i>
                                    </a>
                                    {{ Form::open(['url' => '/bankLedger/'.$BankLedger->id,'method' => 'DELETE'])}}

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
        <div class="col-md-7 m-auto">
            <div class="modal fade show" id="BankLedgerModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h3 class="card-title">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa-solid fa-circle-arrow-left fs-5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i>
                                </button>
                            </h3>
                            Add Bank Ledger
                        </div>
                        <div class="modal-body">
                            {{ Form::Open(array('url' => '/bankLedger','method' => 'POST','class' => 'form-horizontal','id' => 'NewBankLedgerForm', 'files' => true)) }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="BankID" class="form-label col-md-3">Bank ID:</label>
                                    <div class="col-md-8">
                                        <select type="number" name="BankID" id="" class="form-select">
                                            <option value="">Open this select menu</option>
                                            @foreach ($Banks as $Bank)
                                            <option value="{{ $Bank->id }}">
                                                {{ $Bank->id }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Deposit" class="form-label col-md-3">Deposit:</label>
                                    <div class="col-md-8">
                                        <input type="number" name="Deposit" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Withdraw" class="form-label col-md-3">Withdraw:</label>
                                    <div class="col-md-8">
                                        <input type="number" name="Withdraw" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Date" class="form-label col-md-3">Date:</label>
                                    <div class="col-md-8">
                                        <input type="date" name="Date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Description" class="form-label col-md-3">Description:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Description" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" col-sm-8 offset-sm-3">
                                        <button class="btn btn-default float-left w-25">Reset</button>
                                        <input type="submit" name="submit" id="" class="btn bg-navy float-right  w-25 text-capitalize">
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
@endsection