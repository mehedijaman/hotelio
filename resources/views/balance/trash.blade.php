@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-defult">
                    <div class="card-title">
                        <h2 class="card-title">
                            <a href="{{ asset('balance') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking">
                                <i class="fa-solid fa-circle-arrow-left"></i>
                                Add
                            </a>
                            Balance List
                        </h2>
                    </div>
                    <a href="/balance/emptytrash" class="btn btn-sm bg-maroon float-right text-capitalize"><i class="fa-solid fa-trash-can mr-2"></i>Empty Trash</a>
                    <a href="/balance/restoreall" class="btn btn-sm bg-teal float-right text-capitalize mr-3"><i class="fa-solid fa-trash-arrow-up mr-2"></i>Restore All</a>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Acount ID</th>
                                <th>Date</th>
                                <th>OpeningBalance</th>
                                <th>ClosingBalance</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($TrasedBalances as $TrashBalance)
                            <tr>
                                <td>{{$TrashBalance->id}}</td>
                                <td>{{$TrashBalance->AcountID}}</td>
                                <td>{{$TrashBalance->Date}}</td>
                                <td>{{$TrashBalance->OpeningBalance}}</td>
                                <td>{{$TrashBalance->ClosingBalance}}</td>
                                <td>{{$TrashBalance->Status}}</td>
                                <td class="d-flex">
                                    <a href="/balance/{{$TrashBalance->id}}" class="mr-3 text-purple" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View">
                                        <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye">
                                            <path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>
                                    <a href="/balance/{{$TrashBalance->id}}/delete/parmanently" class=" btn btn-danger btn-sm mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        Parmanent Delete
                                        <i class="fa-regular fa-trash-can mr-3 text-black"></i>
                                    </a>
                                    <a href="/balance/{{$TrashBalance->id}}/restore" class=" btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        Restore
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