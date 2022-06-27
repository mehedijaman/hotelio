@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                              <a href="{{ asset('bank') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a> 
                                Bank Trash List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/bank/emptyTrash"><i class="fa-solid fa-trash-can mr-2"></i>Empty Trash</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/bank/restoreAll"><i class="fa-solid fa-trash-can mr-2"></i>Restor All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Branch</th>
                                    <th>Account No</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($BankTrashed as $Bank)
                                    <tr>
                                        <td>{{ $Bank->Name }}</td>
                                        <td>{{ $Bank->Branch }}</td>
                                        <td>{{ $Bank->AccountNo }}</td>
                                        <td>{{ $Bank->Address }}</td>
                                        <td>{{ $Bank->Phone }}</td>
                                        <td>{{ $Bank->Email }}</td>
                                        <td class="d-flex">
                                            <a class="" href="/bank/{{ $Bank->id }}/restore" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Restore">
                                                <i class="fa-solid fa-trash-arrow-up ml-2 text-success"></i>
                                            </a>
                                            <a class="" href="/bank/{{ $Bank->id }}//parmanently/delete" data-bs-toggle="tooltip" data-bs-placement="bottom" title="/Parmanent Delete">
                                                <i class="fa-solid fa-trash-can ml-2 text-dange"></i>
                                            </a>
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