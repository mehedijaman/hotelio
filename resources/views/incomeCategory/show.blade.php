@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <a href="{{ asset('/income/category') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking"> 
                                    <i class="fa-solid fa-circle-arrow-left fs-5 text-light"></i>
                                </a>
                                Category List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/income/category/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                        {{-- <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/income/category/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a> --}}
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Column Name</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <tr>
                                          <th>Id</th>
                                          <td>{{$Category->id}}</td>
                                    </tr>
                                    <tr>
                                          <th>Name</th>
                                          <td>{{$Category->Name}}</td>
                                    </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=" form-group row card-footer col-md-12">
                        <div class="form-group col-md-5">
                                <a href="/income/category/{{ $Category->id }}/edit" data-bs-toggle="Edit" data-bs-placement="bottom" title="Edit" class="btn btn-warning ">
                                <i class="fa-regular fa-pen-to-square mr-3 "></i></i> Edit</a> 
                        </div> 
                        <div class="form-group col-md-5">
                                {!! Form::open(array('url' => '/income/category/'.$Category->id ,'method' => 'DELETE') ) !!}  
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
@endsection