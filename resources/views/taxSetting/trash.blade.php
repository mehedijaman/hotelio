@extends('layouts.app')
@section('content')
   
    <div class="container">
        <section class="button mb-4">
            <a href="{{ asset('taxSetting') }}" class="btn btn-info text-capitalize"> Back To List</a>
        </section>
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title">
                            <h2 class="card-title">TaxSetting List</h2>
                        </div>
                         <a href="/taxSetting/emptyTrash" class="btn btn-sm bg-maroon float-right text-capitalize"><i class="fa-solid fa-trash-can mr-2"></i>Empty Trash</a>
                        <a href="/taxSetting/restoreAll" class="btn btn-sm bg-teal float-right text-capitalize mr-3"><i class="fa-solid fa-trash-arrow-up mr-2"></i>Restore All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Parcent</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach ($TaxSettings as $TaxSetting)
                                    <tr>
                                        <td>{{ $TaxSetting->id }}</td>
                                        <td>{{ $TaxSetting->Name }}</td>
                                        <td>{{ $TaxSetting->Parcent }}</td>
                                        <td>{{ $TaxSetting->Status }}</td>
                                        <td class="">
                                            <a href="/taxSetting/{{ $TaxSetting->id }}/restore" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Restore"><i class="fa-solid fa-trash-arrow-up ml-2 text-success"></i></a>
                                            
                                            <a href="/taxSetting/{{ $TaxSetting->id }}/parmanently/delete" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Parmanently Delete"><i class="fa-solid fa-trash-can ml-2 text-danger"></i> </a>
                                               
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