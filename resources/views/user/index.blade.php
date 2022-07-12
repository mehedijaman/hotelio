@extends('layouts.app')
@section('content')
<div class="container-fluid py-5 ">
    {{-- <section class="button mb-4">
            <a href="{{ asset('booking/create') }}" class="btn btn-info text-capitalize"> <i class="fa-solid fa-circle-plus mr-2"></i>Add</a>
    </section> --}}
    <div class="row">
        <div class="col-md-12 m-auto">
            @if (Session::get('Destroy'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icone fas fa-exclamation-triangle"></i> Deleted !</h5>
                    {{Session::get('Destroy')}}
                </div>
            @endif
            @if (Session::get('DestroyAll'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icone fas fa-exclamation-triangle"></i> Deleted !</h5>
                    {{Session::get('DestroyAll')}}
                </div>
            @endif
            
            <div class="card">
                <div class="card-header bg-defult">
                    <div class="card-title">
                        <h2 class="card-title">
                            {{-- <a href="{{ asset('user/create') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Room">
                                <i class="fa-solid fa-circle-plus mr-2"></i>
                                Add
                            </a> --}}
                            User List
                        </h2>
                    </div>
                    <a class="btn btn-sm bg-navy float-right text-capitalize" href="/room/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                    <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/user/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-borderless ListTable">
                        <thead>
                            <tr class="border-bottom">
                                <th>Employee</th>
                                <th>Name</th>
                                <th>Email</th>
                             
                                <th>Photo</th>
                                <th>Status</th>
                                <th>LastLogin</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($Users as $User)
                            <tr class="border-bottom">
                                <td>{{$User->Employee}}</td>
                                <td>{{$User->name}}</td>
                                <td>{{$User->email}}</td>
                                <td>{{$User->Photo}}</td>
                                <td>
                                    @if ($User->Status)
                                        <b class="text-success fs-6">Active</b> 
                                    @else
                                        <b class="text-danger fs-6">Deactive</b> 
                                    @endif
                                </td>
                                <td>{{$User->LastLogin}}</td>
                                <td>{{$User->Role}}</td>
                               
                               
                                <td class="d-flex">
                                    {{-- <a href="{{ URL::to('/user/'.$User->id) }}" class="mr-3 text-purple" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View">
                                        <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye">
                                            <path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a> --}}
                                    <a class="" href="/user/{{ $User->id }}/edit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                        <i class="fa-regular fa-pen-to-square mr-3 text-orange"></i></i>
                                    </a>

                                    {{ Form::open(array('url' => '/user/'.$User->id,'method' => 'DELETE')) }}
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
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</div>

@endsection