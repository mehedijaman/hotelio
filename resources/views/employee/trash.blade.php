@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <a href="{{ asset('employee') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking"> 
                                    <i class="fa-solid fa-circle-arrow-left fs-5 text-light"></i>
                                </a>
                                Employee Trash List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/employee/emptytrash"><i class="fa-solid fa-recycle mr-2"></i>Empty Trash</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/employee/restoreAll"><i class="fa-solid fa-trash-can mr-2"></i>Restore All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>id</th>
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
                              @foreach ( $EmployeesTrashed as $Employee )
                                    <tr class="">
                                          <td>{{ $Employee->id }}</td>
                                          <td>{{ $Employee->Hotel }}</td>
                                          <td>{{ $Employee->Name }}</td>
                                          <td>{{ $Employee->Designation }}</td>
                                          <td>{{ $Employee->Phone }}</td>
                                          <td>{{ $Employee->Email }}</td>
                                          <td>{{ $Employee->Address }}</td>
                                          <td>{{ $Employee->DateOfJoin }}</td>
                                          <td>{{ $Employee->Status }}</td>
                                          <td class="d-flex">
                                                <a class="" href="/employee/{{ $Employee->id }}/restore" data-bs-toggle="restore" data-bs-placement="bottom" title="Edit">
                                                    <i class="fa-solid fa-trash-arrow-up ml-2 text-success"></i></i>
                                                </a>
                                                <a class="" href="/employee/{{ $Employee->id }}//parmanently/delete" data-bs-toggle="tooltip" data-bs-placement="bottom" title="/Parmanent Delete">
                                                    <i class="fa-solid fa-trash-can ml-2 text-dange"></i>
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