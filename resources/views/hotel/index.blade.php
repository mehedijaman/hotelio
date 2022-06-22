@extends('layouts.app')
@section('content')
    <div class="container col-md-12 ">
        <section class="button mb-4">
            <a href="{{ asset('hotel/create') }}" class="btn btn-info text-capitalize">Add Hotel Informetion</a>
        </section>
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header bg-info">
                        <div class="card-title">
                            <h2 class="card-title">Hotel List</h2>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Reg NO</th>
                                    <th>Logo</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $Hotels as $Hotel)
                                    <tr class="">
                                        <td>{{ $Hotel->id }}</td>
                                        <td>{{ $Hotel->Name }}</td>
                                        <td>{{ $Hotel->Title }}</td>
                                        <td>{{ $Hotel->Email }}</td>
                                        <td>{{ $Hotel->Address }}</td>
                                        <td>{{ $Hotel->Phone }}</td>
                                        <td>{{ $Hotel->RegNo }}</td>
                                        <td>{{ $Hotel->Logo }}</td>
                                        <td>{{ $Hotel->Photo }}</td>
                                        <td class="d-flex">
                                            <a href="" class="mr-3 text-purple" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View">
                                                 <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye"><path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                             <a class="" href="/hotel/{{ $Hotel->id }}/edit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                                 <i class="fa-regular fa-pen-to-square mr-3 text-orange"></i></i>
                                             </a>
                                            
                                             {{ Form::open(array('url' => '/hotel/'.$Hotel->id,'method' => 'DELETE')) }}
                                                 <button class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                     <i class="fa-regular fa-trash-can mr-3 text-danger"></i>
                                                 </button>
                                             {{ Form::close() }}
                                                    
                                         </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection