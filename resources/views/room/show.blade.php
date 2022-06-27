@extends('layouts.app')
@section('content')
    <div class="container py-5">
        {{-- <section class="button mb-4">
            <a href="{{ asset('roomTransfer/create') }}" class="btn btn-info text-capitalize">Add RoomTransfer</a>
        </section> --}}
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="card">
                    <div class="card-header bg-navy">
                        <div class="">
                            <h2 class="card-title">
                                <a href="{{ asset('room') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-white" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                                Room All List
                            </h2>
                        </div>
                        
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                                <tr>
                                    <td>
                                        <b class="fs-5">Guest :</b>
                                        <b class="ml-5">{{ $Room->Hotel}}</b>
                                    </td>
                                     <td>
                                         <b class="fs-5">RoomNo :</b>
                                         <b class="ml-5">{{ $Room->RoomNo}}</b>
                                    </td>
                                    <td>
                                        <b class="fs-5">Floor :</b>
                                        <b class="ml-5">{{ $Room->Floor }}</b>
                                    </td>
                                    <td>
                                        <b class="fs-5">Type :</b>
                                        <b class="ml-5">{{ $Room->Type }}</b>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b class="fs-5">Geyser :</b>
                                        <b class="ml-5">@if($Room->Geyser)Avilable <i class="fa-solid fa-square-check text-green ml-1"></i>@else Inavilable<i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                                    </td>
                                    <td>
                                        <b class="fs-5">AC :</b>
                                        <b class="ml-5">@if($Room->AC)Avilable <i class="fa-solid fa-square-check text-green ml-1"></i>@else Inavilable<i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                                    </td>
                                    <td>
                                        <b class="fs-5">Balcony :</b>
                                        <b class="ml-5">@if($Room->Balcony)Avilable <i class="fa-solid fa-square-check text-green ml-1"></i>@else Inavilable<i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                                    </td>
                                    <td>
                                        <b class="fs-5">Bathtub :</b>
                                        <b class="ml-5">@if($Room->Bathtub)Avilable <i class="fa-solid fa-square-check text-green ml-1"></i>@else Inavilable<i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <b class="fs-5">HiComode :</b>
                                        <b class="ml-5">@if($Room->HiComode)Avilable <i class="fa-solid fa-square-check text-green ml-1"></i>@else Inavilable<i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                                    </td>
                                    <td>
                                        <b class="fs-5">Locker :</b>
                                        <b class="ml-5">@if($Room->Locker)Avilable <i class="fa-solid fa-square-check text-green ml-1"></i>@else Inavilable<i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                                    </td>
                                    <td>
                                        <b class="fs-5">Freeze :</b>
                                        <b class="ml-5">@if($Room->Freeze)Avilable <i class="fa-solid fa-square-check text-green ml-1"></i>@else Inavilable<i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                                    </td>
                                    <td>
                                        <b class="fs-5">Internet :</b>
                                        <b class="ml-5">@if($Room->Internet)Avilable <i class="fa-solid fa-square-check text-green ml-1"></i>@else Inavilable<i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                                    </td>
                                    
                                </tr>
                                <tr>
                                  
                                    <td>
                                        <b class="fs-5">Intercom :</b>
                                        <b class="ml-5">@if($Room->Intercom)Avilable <i class="fa-solid fa-square-check text-green ml-1"></i>@else Inavilable<i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                                    </td>
                                    <td>
                                        <b class="fs-5">TV :</b>
                                        <b class="ml-5">@if($Room->TV)Avilable <i class="fa-solid fa-square-check text-green ml-1"></i>@else Inavilable<i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                                    </td>
                                    <td>
                                        <b class="fs-5">TV :</b>
                                        <b class="ml-5">@if($Room->TV)Avilable <i class="fa-solid fa-square-check text-green ml-1"></i>@else Inavilable<i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                                    </td>
                                    <td>
                                        <b class="fs-5">Price :</b>
                                        <b class="ml-5">{{ $Room->Price}}</b>
                                    </td>
                                    
                                </tr>
                                <tr>
                                   <td>
                                        <b class="fs-5">AdditionalFeatures :</b>
                                        <b class="ml-5">{{ $Room->AdditionalFeatures}}</b>
                                   </td>
                                   <td>
                                        <b class="fs-5">Status :</b>
                                        <b class="ml-5">@if($Room->Status)Active <i class="fa-solid fa-square-check text-green ml-1"></i>@else Deactive<i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                                    </td>
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