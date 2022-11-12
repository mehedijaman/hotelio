@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            @if (Session::get('Restore'))
            <div class="alert alert-teal bg-teal alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h5><i class="fa-solid fa-arrow-rotate-left"></i>
                    Restore!</h5>
                {{Session::get('Restore')}}
            </div>
            @endif
            @if (Session::get('RestoreAll'))
            <div class="alert alert-teal bg-teal alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h5><i class="fa-solid fa-arrow-rotate-left"></i>
                    Restore All!</h5>
                {{Session::get('RestoreAll')}}
            </div>
            @endif
            @if (Session::get('PermanentDelete'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h5><i class="icon fas fa-ban"></i>
                    Permanent Delete!</h5>
                {{Session::get('PermanentDelete')}}
            </div>
            @endif
            @if (Session::get('PermanentAllDelete'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h5><i class="icon fas fa-ban"></i>
                    Permanent All Delete!</h5>
                {{Session::get('PermanentAllDelete')}}
            </div>
            @endif
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
                                <td>{{$TrashBalance->AcountID}}</td>
                                <td>{{$TrashBalance->Date}}</td>
                                <td>{{$TrashBalance->OpeningBalance}}</td>
                                <td>{{$TrashBalance->ClosingBalance}}</td>
                                <td>{{$TrashBalance->Status}}</td>
                                <td class="d-flex">
                                    <a href="/balance/{{$TrashBalance->id}}/restore" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        <i class="fa-solid fa-trash-arrow-up ml-2 text-success"></i>
                                    </a>
                                    <a href="/balance/{{$TrashBalance->id}}/delete/parmanently" class=" mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        <i class="fa-solid fa-trash-can ml-2 text-danger"></i>
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
    @endsection