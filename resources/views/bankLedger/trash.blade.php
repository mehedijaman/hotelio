@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            @if (Session::get('Restore'))
            <div class="alert alert-teal bg-teal alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h5><i class="fa-solid fa-arrow-rotate-left"></i>Restore!</h5>
                {{Session::get('Restore')}}
            </div>
            @endif
            @if (Session::get('Parmanent_Delete'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h5> <i class="icon fas fa-ban"></i>
                    Parmanent Delete!
                </h5>
                {{Session::get('Parmanent_Delete')}}
            </div>
            @endif
            <div class="card">

                <div class="card-header bg-defult">
                    <div class="card-title">
                        <h2 class="card-title">
                            <a href="{{ asset('acount/ledger') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking">
                                <i class="fa-solid fa-circle-arrow-left"></i>
                                Add
                            </a>
                            Balance List
                        </h2>
                    </div>
                    <a href="/acount/ledger/emptytrash" class="btn btn-sm bg-maroon float-right text-capitalize"><i class="fa-solid fa-trash-can mr-2"></i>Empty Trash</a>
                    <a href="/acount/ledger/restoreall" class="btn btn-sm bg-teal float-right text-capitalize mr-3"><i class="fa-solid fa-trash-arrow-up mr-2"></i>Restore All</a>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Bank</th>
                                <th>Depositt</th>
                                <th>Withdraw</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($BankLedgers as $TrashBankLedger)
                            <tr>
                                <td>{{$TrashBankLedger->Bank}}</td>
                                <td>{{$TrashBankLedger->Deposit}}</td>
                                <td>{{$TrashBankLedger->Withdraw}}</td>
                                <td>{{$TrashBankLedger->Date}}</td>
                                <td>{{$TrashBankLedger->Description}}</td>
                                <td class="d-flex">
                                    <a href="/acount/ledger/{{$TrashBankLedger->id}}" class="mr-3 text-purple" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View">
                                        <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye">
                                            <path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>
                                    <a href="/acount/ledger/{{$TrashBankLedger->id}}/delete/parmanently" class="mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">

                                        <i class="fa-regular fa-trash-can mr-3 text-black"></i>
                                    </a>
                                    <a href="/acount/ledger/{{$TrashBankLedger->id}}/restore" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">

                                        <i class="fa-solid fa-arrow-rotate-left"></i>

                                    </a>

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
    </div>
</div>
@endsection