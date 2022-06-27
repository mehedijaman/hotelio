@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <a href="{{ asset('expense') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking"> 
                                    <i class="fa-solid  fa-circle-arrow-left fs-5 text-light"></i>
                                </a>
                                Expense List
                            </h2>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Column</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr class="">
                                          <tr>
                                                <th>Id</th>
                                                <td>{{ $Expense->id }}</td>
                                          </tr>
                                          <tr>
                                                <th>Name</th>
                                                <td>{{ $Expense->CategoryName }}</td>
                                          </tr>
                                          <tr>
                                                <th>Amount</th>
                                                <td>{{ $Expense->Amount }}</td>
                                          </tr>
                                          <tr>
                                                <th>Description</th>
                                                <td>{{ $Expense->Description }}</td>
                                          </tr>
                                          <tr>
                                                <th>Date and Time </th>
                                                <td>{{ $Expense->Date }}</td>
                                          </tr>
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