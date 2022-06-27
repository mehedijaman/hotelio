@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <a href="{{ asset('expenseCategory') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking"> 
                                    <i class="fa-solid fa-circle-arrow-left mr-2"></i>
                                </a>
                                    Trash Income Category List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/expenseCategory/restoreAll"><i class="fa-solid fa-trash-arrow-up mr-2"></i>restore All</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/expenseCategory/emptyTrash"><i class="fa-solid fa-trash-can mr-2"></i>Empty Trash</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                              <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                              
                                <tbody>
                                    @foreach ($CategoryTrashed as $Category)
                                        <tr>
                                            <td>{{$Category->Name}}</td>
                                        <td>
                                          {{-- Restore --}}
                                          <a href="/expenseCategory/{{ $Category->id }}/restore" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Restore"><i class="fa-solid fa-trash-arrow-up ml-2 text-success"></i></a>
                                          
                                          <a href="/expenseCategory/{{ $Category->id }}/parmanently/delete" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Parmanently Delete"><i class="fa-solid fa-trash-can ml-2 text-danger"></i> </a>
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