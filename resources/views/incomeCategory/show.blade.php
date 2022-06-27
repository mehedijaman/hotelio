@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <a href="{{ asset('incomeCategory') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking"> 
                                    <i class="fa-solid fa-circle-arrow-left fs-5 text-light"></i>
                                </a>
                                Category List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/incomeCategory/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/incomeCategory/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Column Name</th>
                                    <th>Data</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                          <th>Id</th>
                                          <td>{{$Category->id}}</td>
                                    </tr>
                                    <tr>
                                          <th>Name</th>
                                          <td>{{$Category->Name}}</td>
                                    </tr>
                                    <tr>
                                          <th>Action</th>
                                          <th></th>
                                          <td>
                                                {{ Form::open(array('url' => '/incomeCategory/'.$Category->id,'method' => 'DELETE')) }}
                                                      <button class="" data-bs-toggle="Delete" data-bs-placement="bottom" title="Delete">
                                                      <i class="fa-regular fa-trash-can mr-3 text-danger"></i>
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