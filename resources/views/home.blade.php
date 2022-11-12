@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row pt-3">
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-gradient-success"><i class="fa-brands fa-buffer"></i></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Totol Floor</span>
                        <span class="info-box-number counter">{{$TotalFloor}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fa-brands fa-buromobelexperte"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">TotalFreeRooms</span>
                        <span class="info-box-number counter">{{$TotalFreeRooms}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="fa-solid fa-house-circle-check"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">TotalBookedRooms</span>
                        <span class="info-box-number counter">{{ $TotalBookedRooms }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-indigo"><i class="fa-solid fa-money-bill-trend-up"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">TotalDeposit</span>
                        <span class="info-box-number counter">{{ $TotalDeposit }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-navy"><i class="fa-solid fa-money-bill-transfer"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">TotalWithdraw</span>
                        <span class="info-box-number counter">{{ $TotalWithdraw }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3 class="counter">{{$TotalUser}}</h3>
                    <p>
                        Total User 
                    </p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3 class="counter">{{ $TotalRooms }}</h3>
                        <p>Total Rooms</p>
                    </div>
                    <div class="icon">
                        <i class="fa-brands fa-buromobelexperte"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $TotalEmployee }}</h3>
                        <p>Total Employee</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-people-roof"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-indigo">
                    <div class="inner">
                        <h3 class="counter">{{ $TotalGuest }}</h3>
                        <p>Total Guest</p>
                    </div>
                    <div class="icon">
                       <i class="fa-solid fa-person-walking-luggage"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-orange">
                    <div class="inner">
                        <h3 class="counter">{{ $TotalBank }}</h3>
                        <p>Total Bank</p>
                    </div>
                    <div class="icon">
                       <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-fuchsia">
                    <div class="inner">
                        <h3 class="counter">{{ $TotalAccountNo }}</h3>
                        <p> Total AccountNo </p>
                    </div>
                    <div class="icon">
                       <i class="fa-solid fa-money-check-dollar"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

       
       <div class="row">
           <div class="col-md-12">
                <div class="card card-primary ">
                    <div class="card-header">
                        <div class="card-title">
                            <h5>Total Room List</h5>
                              Total Rooms : <span class="counter">{{ $TotalRooms }}</span> | Booked : <span class="counter">{{ $TotalBookedRooms }}</span> | Free : <span class="counter">{{ $TotalFreeRooms }}</span>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        @foreach($Rooms as $Room)
                            <div class="col-md-5 ml-5 d-inline-block">
                                @if($Room->Status)
                                    <div class="info-box btn bg-danger disabled">
                                        <span class="info-box-icon"><i class="fa-solid fa-house-circle-check"></i></span></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">{{ $Room->RoomNo }}</span>
                                                
                                        </div>
                                    </div>
                                @else
                                    <div class="info-box btn bg-primary">
                                        <span class="info-box-icon"><i class="fa-brands fa-buromobelexperte"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">{{ $Room->RoomNo }}</span>
                                            
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
           </div>
       </div>
        
    </div>
@endsection
