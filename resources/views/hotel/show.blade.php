@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-10 m-auto">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-gray">
                        <div class="card-title">
                              <h2 class="card-title text-navy ">
                                    <a href="{{ asset('hotel') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                                    Show All List
                              </h2>
                        </div>
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
                                    <tr class="">
                                          {{-- <tr>
                                                <th>Id</th>
                                                <td>{{ $Hotels->id }}</td>
                                          </tr> --}}
                                          <tr>
                                                <th>Name</th>
                                                <td>{{ $Hotels->Name }}</td>
                                          </tr>
                                          <tr>
                                                <th>Title</th>
                                                <td>{{ $Hotels->Title }}</td>
                                          </tr>
                                          <tr>
                                                <th>Email</th>
                                                <td>{{ $Hotels->Email }}</td>
                                          </tr>
                                          <tr>
                                                <th>Address</th>
                                                <td>{{ $Hotels->Address }}</td>
                                          </tr>
                                          <tr>
                                                <th>Phone</th>
                                                <td>{{ $Hotels->Phone }}</td>
                                          </tr>
                                          <tr>
                                                <th>Reg No</th>
                                                <td>{{ $Hotels->RegNo }}</td>
                                          </tr>
                                          <tr>
                                                <th>Logo</th>
                                                <td>{{ $Hotels->Logo }}</td>
                                          </tr> 
                                          <tr>
                                                <th>Photo</th>
                                                <td>{{ $Hotels->Photo }}</td>
                                          </tr>                         
                                    </tr>
                            </tbody>
                           
                        </table>

                    </div>
                    <div class="card-footer">
                        <a href="/hotel/{{ $Hotels->id }}/edit" data-bs-toggle="Edit" data-bs-placement="bottom" title="Edit" class="btn btn-warning">
                        <i class="fa-regular fa-pen-to-square mr-3"></i></i> Edit</a> 
                        
                        <a href="/hotel/{{ $Hotels->id }}/edit" data-bs-toggle="Edit" data-bs-placement="bottom" title="Edit" class="btn btn-danger"><i class="fa-regular fa-trash-can mr-3"></i></i> Delete</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection