@extends('layouts.app')
@section('content')
    <div class="container py-5">
        {{-- <section class="button mb-4">
            <a href="{{ asset('roomTransfer/create') }}" class="btn btn-info text-capitalize">Add RoomTransfer</a>
        </section> --}}
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-header bg-navy">
                        <div class="">
                            <h2 class="card-title">
                                <a href="{{ asset('roomTransfer') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-white" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                                RoomTransfer All List
                            </h2>
                        </div>
                        
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                                <tr>
                                    <td>Guest</td>
                                    {{-- <td>{{ $RoomTransfer->Guest}}</td> --}}
                                </tr>
                                <tr>
                                    <td>FromRoom</td>
                                    <td>{{ $RoomTransfer->FromRoomID}}</td>
                                    
                                </tr>
                                <tr>
                                    <td>ToRoom</td>
                                    <td>{{ $RoomTransfer->ToRoomID}}</td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td>{{ $RoomTransfer->Date}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="card-footer">
                                <p class="card-text text-right"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection