@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-defult">
                    <div class="card-title">
                        <h2 class="card-title">
                            <a href="{{ asset('acount/ledger/create') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking">
                                <i class="fa-solid fa-circle-plus mr-2"></i>
                                Add
                            </a>
                            Balance List
                        </h2>
                    </div>
                    <a class="btn btn-sm bg-navy float-right text-capitalize" href="/acountLedger/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
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
                                    <a class=" btn btn-info btn-sm mx-2" href="/acount/ledger/{{$AccountLedger->id}}/edit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                        Update
                                        <i class="fa-regular fa-pen-to-square mr-3 text-black"></i></i>
                                    </a>
                                    {{ Form::open(['url' => '/acount/ledger/'.$AccountLedger->id,'method' => 'DELETE'])}}
                                    <button class=" btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        Delete
                                        <i class="fa-regular fa-trash-can mr-3 text-black"></i>
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