@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                              <a href="{{ asset('expense') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a> 
                                Income Trash List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/expense/emptyTrash"><i class="fa-solid fa-recycle mr-2"></i>Empty Trash</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/expense/restoreAll"><i class="fa-solid fa-trash-can mr-2"></i>Restore All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                              <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $ExpenseTrashed as $Expense)
                                        <tr class="">
                                            <td>{{ $Expense->id }}</td>
                                            <td>{{ $Expense->Amount }}</td>
                                            <td>{{ $Expense->Description }}</td>
                                            <td>{{ $Expense->Date }}</td>
                                        <td class="d-flex">
                                            <a class="" href="/expense/{{ $Expense->id }}/restore" data-bs-toggle="restore" data-bs-placement="bottom" title="restore">
                                                <i class="fa-solid fa-trash-arrow-up ml-2 text-success"></i></i>
                                            </a>
                                            <a class="" href="/expense/{{ $Expense->id }}//parmanently/delete" data-bs-toggle="ParmanentDelete" data-bs-placement="bottom" title="Parmanent Delete">
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