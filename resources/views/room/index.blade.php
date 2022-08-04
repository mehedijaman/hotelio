@extends('layouts.app')
@section('content')
<div class="container-fluid py-5 ">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-defult">
                    <div class="card-title">
                        <h2 class="card-title">
                            <button type="button" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Room" data-toggle="modal" data-target="#NewRoomModal"> 
                                <i class="fa-solid fa-circle-plus mr-2"></i>
                                Add
                            </button> 
                            Room List
                        </h2>
                    </div>
                    <a class="btn btn-sm bg-navy float-right text-capitalize" href="/room/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                    
                    <button class="btn btn-sm bg-maroon float-right text-capitalize mr-3" id="DeleteAllBtn">
                        <i class="fa-solid fa-trash-can mr-2"></i>
                        Delete All
                    </button>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-responsive table-borderless "id="RoomList">
                        <thead>

                            <tr class="border-bottom">
                                <th>ID</th>
                                <th>Hotel</th>
                                <th>RoomNo</th>
                                <th>Floor</th>
                                <th>Type</th>
                                <th>Geyser</th>
                                <th>Ac</th>
                                <th>Balcony</th>
                                <th>Internet</th>
                                <th>Tv</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
    <div class="modal fade show" id="ShowRoomModal"  role="dialog">
        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add A New Room</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-responsive table-stripped tabole-condensed">
                        <thead>
                            <tr>
                                <th>Attribute</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><b class="fs-5">Hotel :</b></td>
                            <td><span class="fs-5" id="ViewHotel"></span></td>
                        </tr>
                        <tr>
                            <td>
                                 <b class="fs-5">RoomNo :</b>
                                 <b class="ml-5"></b>
                            </td>
                            <td>
                                <b class="fs-5">Floor :</b>
                                <b class="ml-5"></b>
                            </td>
                            <td>
                                <b class="fs-5">Geyser :</b>
                                <b class="ml-5" id="ViewGeyser"></b>
                            </td>
                        </tr>

                        {{-- <tr>
                            <td>
                                <b class="fs-5">Geyser :</b>
                                <b class="ml-5">@if($Rooms->Geyser) <i class="fa-solid fa-square-check text-green ml-1"></i>@else <i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                            </td>
                            <td>
                                <b class="fs-5">AC :</b>
                                <b class="ml-5">@if($Rooms->AC) <i class="fa-solid fa-square-check text-green ml-1"></i>@else <i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                            </td>
                            <td>
                                <b class="fs-5">Balcony :</b>
                                <b class="ml-5">@if($Rooms->Balcony) <i class="fa-solid fa-square-check text-green ml-1"></i>@else <i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                            </td>
                            <td>
                                <b class="fs-5">Bathtub :</b>
                                <b class="ml-5">@if($Rooms->Bathtub) <i class="fa-solid fa-square-check text-green ml-1"></i>@else <i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <b class="fs-5">HiComode :</b>
                                <b class="ml-5">@if($Rooms->HiComode) <i class="fa-solid fa-square-check text-green ml-1"></i>@else <i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                            </td>
                            <td>
                                <b class="fs-5">Locker :</b>
                                <b class="ml-5">@if($Rooms->Locker) <i class="fa-solid fa-square-check text-green ml-1"></i>@else <i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                            </td>
                            <td>
                                <b class="fs-5">Freeze :</b>
                                <b class="ml-5">@if($Rooms->Freeze) <i class="fa-solid fa-square-check text-green ml-1"></i>@else <i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                            </td>
                            <td>
                                <b class="fs-5">Internet :</b>
                                <b class="ml-5">@if($Rooms->Internet) <i class="fa-solid fa-square-check text-green ml-1"></i>@else <i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                            </td>
                            
                        </tr>
                        <tr>
                          
                            <td>
                                <b class="fs-5">Intercom :</b>
                                <b class="ml-5">@if($Rooms->Intercom) <i class="fa-solid fa-square-check text-green ml-1"></i>@else <i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                            </td>
                            <td>
                                <b class="fs-5">TV :</b>
                                <b class="ml-5">@if($Rooms->TV) <i class="fa-solid fa-square-check text-green ml-1"></i>@else <i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                            </td>
                            <td>
                                <b class="fs-5">TV :</b>
                                <b class="ml-5">@if($Rooms->TV) <i class="fa-solid fa-square-check text-green ml-1"></i>@else<i class="fa-solid fa-square-xmark text-danger ml-1"></i> @endif</b>
                            </td>
                            <td>
                                <b class="fs-5">Price :</b>
                                <b class="ml-5">{{ $Rooms->Price}}</b>
                            </td> --}}
                            
                        </tr>
                    </tbody>
                    </table>
                    
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade show" id="NewRoomModal"  role="dialog">
        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add A New Room</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    {{ Form::open(array('url' => 'room', 'method' => 'POST','class' => 'form-horizantal','id'=>'NewRoomFrom','files' => true)) }}
                        <div class="card-body pb-0">
                            <div class="form-group row">

                                <div class="col-md-12">
                                    <div class="form-group row">
                                        {{-- <label for="HotelID" class="form-label col-md-3">Hotel:</label> --}}
                                        <div class="col-md-3">
                                            <select type="number" name="HotelID" id=""  class="form-select" required>
                                                <option value="">Select Hotel</option>
                                                    @foreach ($Hotels as $Hotel)
                                                    <option value="{{ $Hotel->id }}">
                                                        {{ $Hotel->Name }}
                                                    </option>
                                                    @endforeach
                                            </select>
                                        </div> 
                                          <div class="col-md-3">
                                            <select name="Type" id="" class="form-select">
                                                <option value="">Select Type</option>
                                                <option value="Single">Single Bed</option>
                                                <option value="Double">Double Bed</option>
                                                <option value="Tripe">Tripple Bed</option>
                                            </select>
                                        </div> 
                                          <div class="col-md-2">
                                            <input type="text" name="RoomNo" class="form-control" placeholder="RoomNo" required>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="Floor" class="form-control" placeholder="Floor" required> 
                                        </div>
                                       
                                        <div class="col-md-2">
                                            <input type="number" name="Price" class="form-control" placeholder="Price">
                                        </div>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <hr class="bg-dark">
                                </div>
                                
                            <div class="form-group row ">
                                <div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <div class="form-group row">
                                                <label for="Geyser" class="col-md-5 form-label">Geyser:</label>
                                                <div class="col-md-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1" name="Geyser" value="1">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1" name="Geyser" value="0">
                                                        <label class="custom-control-label" for="customSwitch1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group row">
                                                <label for="AC" class="col-md-3 form-label">AC:</label>
                                                <div class="col-md-8">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="ACSwitch" name="AC" value="1">
                                                        <input type="checkbox" class="custom-control-input" id="ACSwitch" name="AC" value="0">
                                                        <label class="custom-control-label" for="ACSwitch"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label for="Balcony" class="col-md-3 form-label">Balcony:</label>
                                                <div class="col-md-8">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                        <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                                                      </div>
                                                    {{-- <div class="form-check form-check-inline ml-1">
                                                        <input type="radio" class="form-check-input" name="Balcony" value="1">
                                                        <label for="" class="form-check-label">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline ml-4">
                                                        <input type="radio" class="form-check-input" name="Balcony" value="0">
                                                        <label for="" class="form-check-label">
                                                            No
                                                        </label>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label for="Bathtub" class="col-md-3 py-0 form-label">Bathtub:</label>
                                                <div class="col-md-8">
                                                    <div class="form-check form-check-inline ml-1">
                                                        <input type="radio" class="form-check-input" name="Bathtub" value="1">
                                                        <label for="" class="form-check-label">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline ml-4">
                                                        <input type="radio" class="form-check-input" name="Bathtub" value="0">
                                                        <label for="" class="form-check-label">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label for="HiComode" class="col-md-3 form-label">HiComode:</label>
                                                <div class="col-md-8">
                                                    <div class="form-check form-check-inline ml-1">
                                                        <input type="radio" class="form-check-input" name="HiComode" value="1">
                                                        <label for="" class="form-check-label">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline ml-4">
                                                        <input type="radio" class="form-check-input" name="HiComode" value="0">
                                                        <label for="" class="form-check-label">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label for="Locker" class="col-md-3 form-label">Locker:</label>
                                                <div class="col-md-8">
                                                    <div class="form-check form-check-inline ml-1">
                                                        <input type="radio" class="form-check-input" name="Locker" value="1">
                                                        <label for="" class="form-check-label">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline ml-4">
                                                        <input type="radio" class="form-check-input" name="Locker" value="0">
                                                        <label for="" class="form-check-label">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label for="Freeze" class="col-md-3 form-label">Freeze:</label>
                                                <div class="col-md-8">
                                                    <div class="form-check form-check-inline ml-1">
                                                        <input type="radio" class="form-check-input" name="Freeze" value="1">
                                                        <label for="" class="form-check-label">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline ml-4">
                                                        <input type="radio" class="form-check-input" name="Freeze" value="0">
                                                        <label for="" class="form-check-label">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label for="Internet" class="col-md-3 form-label">Internet:</label>
                                                <div class="col-md-8">
                                                    <div class="form-check form-check-inline ml-1">
                                                        <input type="radio" class="form-check-input" name="Internet" value="1">
                                                        <label for="" class="form-check-label">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline ml-4">
                                                        <input type="radio" class="form-check-input" name="Internet" value="0">
                                                        <label for="" class="form-check-label">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label for="Intercom" class="col-md-3 form-label">Intercom:</label>
                                                <div class="col-md-8">
                                                    <div class="form-check form-check-inline ml-1">
                                                        <input type="radio" class="form-check-input" name="Intercom" value="1">
                                                        <label for="" class="form-check-label">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline ml-4">
                                                        <input type="radio" class="form-check-input" name="Intercom" value="0">
                                                        <label for="" class="form-check-label">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label for="TV" class="col-md-3 form-label">TV:</label>
                                                <div class="col-md-8">
                                                    <div class="form-check form-check-inline ml-1">
                                                        <input type="radio" class="form-check-input" name="TV" value="1">
                                                        <label for="" class="form-check-label">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline ml-4">
                                                        <input type="radio" class="form-check-input" name="TV" value="0">
                                                        <label for="" class="form-check-label">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label for="Wardrobe" class="col-md-3 form-label">Wardrobe:</label>
                                                <div class="col-md-8">
                                                    <div class="form-check form-check-inline ml-1">
                                                        <input type="radio" class="form-check-input" name="Wardrobe" value="1">
                                                        <label for="" class="form-check-label">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline ml-4">
                                                        <input type="radio" class="form-check-input" name="Wardrobe" value="0">
                                                        <label for="" class="form-check-label">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>

                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default text-capitalize" id="ResetBtnForm">Reset</button>
                                <button type="button" name="submit" type="submit" class="btn bg-navy text-capitalize" id="SubmitBtn">submit</button>
                            </div>
                        </div>
                    {{ Form::close() }}

                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="js/custom-js/room.js"></script>
@endsection