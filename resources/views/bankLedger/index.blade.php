@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header bg-defult">
                    <div class="card-title">
                        <h2 class="card-title">
                            <a href="{{  asset('bankLedger/create') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking">
                                <i class="fa-solid fa-circle-plus mr-2"></i>
                            </a>
                            Add Bank Ledger
                        </h2>
                    </div>
                    <a class="btn btn-sm bg-navy float-right text-capitalize" href="bankLedger/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                    <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/balance/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
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
    </div>
</div>
@endsection