@extends('layouts.app')
@section('content')
   
    <div class="container py-5">
        {{-- <section class="button mb-4">
            <a href="{{ asset('taxSetting/create') }}" class="btn btn-info text-capitalize">Add TaxSetting</a>
        </section> --}}
        <div class="row">
            <div class="col-md-9 m-auto">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <a href="{{ asset('taxSetting/create') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking"> 
                                    <i class="fa-solid fa-circle-plus mr-2"></i>
                                    Add
                                </a>
                                TaxSetting List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/taxSetting/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/taxSetting/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Parcent</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach ($TaxSettings as $TaxSetting)
                                    <tr>
                                        <td>{{ $TaxSetting->Name }}</td>
                                        <td>{{ $TaxSetting->Parcent }}</td>
                                        <td>
                                            @if($TaxSetting->Status)
                                            <b class="text-success fs-6">Active</b>      
                                            @else <b class="text-danger fs-6">Deactive</b> @endif
                                        </td>
                                        <td class="d-flex">
                                           {{-- <a href="" class="mr-3 text-purple" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View">
                                                <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye"><path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle></svg>
                                           </a> --}}
                                            <a class="" href="/taxSetting/{{ $TaxSetting->id }}/edit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                                <i class="fa-regular fa-pen-to-square mr-3 text-orange"></i></i>
                                            </a>
                                            
                                            {{ Form::open(array('url' => '/taxSetting/'.$TaxSetting->id,'method' => 'DELETE')) }}
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