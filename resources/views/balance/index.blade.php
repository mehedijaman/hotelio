@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12 ">
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
                <h5><i class="fa-solid fa-xmark text-light fs-3 mx-1"></i> Delete All!</h5>
                {{Session::get('DeleteAll')}}
            </div>
            @endif
            <div class="card">
                <div class="card-header bg-defult">
                    <div class="card-title">
                        <h2 class="card-title">
                            <a href="{{ asset('balance/create') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking">
                                <i class="fa-solid fa-circle-plus mr-2"></i>
                                Add
                            </a>
                            Balance List
                        </h2>
                    </div>
                    <a class="btn btn-sm bg-navy float-right text-capitalize" href="/balance/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                    <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/balance/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap ListTable">
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
                            <tr>
                                <td>{{$Balance->AcountID}}</td>
                                <td>{{$Balance->Date}}</td>
                                <td>{{$Balance->OpeningBalance}}</td>
                                <td>{{$Balance->ClosingBalance}}</td>
                                <td>@if($Balance->Status)<b class="text-success">Active</b>
                                    @else <b class="text-danger">Deactive</b> @endif
                                </td>
                                <td class="d-flex">
                                    <a href="/balance/{{$Balance->id}}" class="mr-3 text-purple" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View">
                                        <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye">
                                            <path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>
                                    <a class=" mx-2" href="/balance/{{$Balance->id}}/edit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">

                                        <i class="fa-regular fa-pen-to-square mr-3 text-orange"></i></i>
                                    </a>
                                    {{ Form::open(['url' => '/balance/'.$Balance->id,'method' => 'DELETE'])}}

                                    <button class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        <i class="fa-regular fa-trash-can mr-3 text-black text-danger"></i>
                                    </button>
                                    {{ Form::close() }}
                                </td>
                            </tr>
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