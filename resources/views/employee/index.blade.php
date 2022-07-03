@extends('layouts.app')
@section('content')
<div class="container py-5 col-md-12 m-auto" style="width:100% ;">
    <div class="row">
        <div class="col-md-12">

            @if (Session::get('delete'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" arial-hide="true"></button>
                    <h5><i class="icon fas fa-trash-can"></i>Delete!</h5>
                    {{Session::get('delete')}}
                </div>
            @endif

            @if (Session::get('destroyAll'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" arial-hide="true"></button>
                    <h5><i class="icon fas fa-trash-can"></i>Delete All!</h5>
                    {{Session::get('destroyAll')}}
                </div>
            @endif

            <div class="card">
                <div class="card-header bg-defult">
                    <div class="card-title">
                        <h2 class="card-title">
                            <a href="{{ asset('employee/create') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking">
                                <i class="fa-solid fa-circle-plus mr-2"></i>
                                Add
                            </a>
                            Employee List
                        </h2>
                    </div>
                    <a class="btn btn-sm bg-navy float-right text-capitalize" href="/employee/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                    <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/employee/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-responsive table-borderless">

                        <thead>
                            <tr class="border-bottom">
                                <th>Hote Name</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Date Of Join</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $Employees as $Employee )
                            <tr class="border-bottom">
                                <td>{{ $Employee->Hotel }}</td>
                                <td>{{ $Employee->Name }}</td>
                                <td>{{ $Employee->Designation }}</td>
                                <td>{{ $Employee->Phone }}</td>
                                <td>{{ $Employee->Email }}</td>
                                <td>{{ $Employee->Address }}</td>
                                <td>{{ $Employee->DateOfJoin }}</td>
                                <td>@if ($Employee->Status ) <i class="fa-solid fa-circle-check text-success ml-4"> </i> @else <i class="fa-solid fa-rectangle-xmark text-danger ml-4 "> </i> @endif</td>
                                <td class="d-flex">
                                    <a href="{{URL::to('employee/'.$Employee->id)}}" class="mr-3 text-purple data-bs-toggle="View" data-bs-placement="bottom" title="View">
                                        <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye">
                                            <path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>
                                    <a class="" href="/employee/{{ $Employee->id }}/edit" data-bs-toggle="Edit" data-bs-placement="bottom" title="Edit">
                                        <i class="fa-regular fa-pen-to-square mr-3 text-orange"></i></i>
                                    </a>

                                    {{ Form::open(array('url' => '/employee/'.$Employee->id,'method' => 'DELETE')) }}
                                    <button class="" data-bs-toggle="Delete" data-bs-placement="bottom" title="Delete">
                                        <i class="fa-regular fa-trash-can mr-3 text-danger"></i>
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