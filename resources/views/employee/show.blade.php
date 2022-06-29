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
                                Employee List
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
                                            <td>{{ $Employee->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Date of Birth</th>
                                            <td>{{ $Employee->DateOfBirth }}</td>
                                        </tr>
                                        <tr>
                                            <th>NID No</th>
                                            <td>{{ $Employee->NIDNo }}</td>
                                        </tr>
                                        <tr>
                                            <th>NID Doc </th>
                                            <td>{{ $Employee->NID }}</td>
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