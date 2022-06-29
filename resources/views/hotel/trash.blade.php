@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12">
        <div class="row">
            <div class="col-md-12">
                @if (Session::get('Delete'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss='alert' aria-hidden="true"></button>
                        <h5><i class="icone fas fa-exclamation-triangle"></i> Permanent delete !</h5>
                        {{Session::get('Delete')}}
                    </div>
                @endif

                @if (Session::get('Restore'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-check"></i>Restore Successfull!</h5>
                    {{Session::get('Restore')}}
                </div>
                    
                @endif

                @if(Session::get('RestoreAll'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Success!</h5>
                    {{ Session::get('RestoreAll') }}
                </div>
                @endif

                @if(Session::get('emptyTrash'))
                <div class="alert alert-success alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Success!</h5>
                    {{ Session::get('emptyTrash') }}
                </div>
                @endif

                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                              <a href="{{ asset('hotel') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a> 
                                Hotel Trash List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/hotel/emptyTrash"><i class="fa-solid fa-recycle mr-2"></i>Empty Trash</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/hotel/restoreAll"><i class="fa-solid fa-trash-can mr-2"></i>Restore All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
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
                                @foreach ( $HotelTrashed as $Hotel)
                                    <tr class="">
                                        <td>{{ $Hotel->Name }}</td>
                                        <td>{{ $Hotel->Title }}</td>
                                        <td>{{ $Hotel->Email }}</td>
                                        <td>{{ $Hotel->Address }}</td>
                                        <td>{{ $Hotel->Phone }}</td>
                                        <td>{{ $Hotel->RegNo }}</td>
                                        <td>{{ $Hotel->Logo }}</td>
                                        <td>{{ $Hotel->Photo }}</td>
                                        <td class="d-flex">
                                            <a class="" href="/hotel/{{ $Hotel->id }}/restore" data-bs-toggle="restore" data-bs-placement="bottom" title="restore">
                                                <i class="fa-solid fa-trash-arrow-up ml-2 text-success"></i></i>
                                            </a>
                                            <a class="" href="/hotel/{{ $Hotel->id }}/parmanently/delete" data-bs-toggle="Parmanent Delete" data-bs-placement="bottom" title="Parmanent Delete">
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