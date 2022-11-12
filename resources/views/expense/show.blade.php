@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-8 m-auto">
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
                    <div class=" form-group row card-footer col-md-12">
                        <div class="form-group col-md-5">
                              <a href="/expense/{{ $Expense->id }}/edit" data-bs-toggle="Edit" data-bs-placement="bottom" title="Edit" class="btn btn-warning ">
                              <i class="fa-regular fa-pen-to-square mr-3 "></i></i> Edit</a> 
                        </div> 
                        <div class="form-group col-md-5">
                              {!! Form::open(array('url' => '/expense/'.$Expense->id ,'method' => 'DELETE') ) !!}  
                              <button class="bg-danger btn btn-danger" data-bs-toggle="Delete" data-bs-placement="bottom" title="Delete">
                                    <i class="fa-regular fa-trash-can mr-3 text-light"></i>
                                    Delete
                              </button>
                              {!! Form::close() !!}
                        </div>
                  </div> 
                </div>
            </div>
        </div>
    </div>
@endsection