@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-md-11 m-auto">
                @if (Session::get('Success'))
                    <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Success!</h5>
                    {{Session::get('Success')}}
                </div>                    
                @endif
                <div class="card card-primary">
                    <div class="card-header">
                        <h2 class="card-title text-navy">
                             <a href="{{ asset('room') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                              Room Update
                        </h2>
                    </div>

                    {{ Form::open(array('url' => '/room/'.$Room->id, 'method' => 'PATCH','class' => 'form-horizantal','files' => true)) }}
                        <div class="card-body pb-0">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="HotelID" class="form-label col-md-3">Hotel:</label>
                                        <div class="col-md-8">
                                            <select type="number" name="HotelID" id=""  class="form-select" required>
                                                <option value="">Open this select menu</option>
                                                @foreach ($Hotels as $Hotel)
                                                @if ($Room->HotelID == $Hotel->id)
                                                        <option value="{{ $Hotel->id }}" selected>
                                                        {{ $Hotel->Name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $Hotel->id }}">
                                                            {{ $Hotel->Name }}
                                                         </option>
                                                    @endif
                                                
                                                @endforeach
                                            </select>
                                        </div>
                                    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="RoomNo" class="form-label col-md-3">RoomNo:</label>
                                        <div class="col-md-8">
                                            <input type="text" name="RoomNo" class="form-control" value="{{ $Room->RoomNo}}" required>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="Floor" class="form-label col-md-3">Floor:</label>
                                        <div class="col-md-8">
                                            <input type="text" name="Floor" class="form-control" value="{{ $Room->Floor}}" required> 
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="Type" class="form-label col-md-3">Type:</label>
                                        <div class="col-md-8">
                                            <select name="Type" id="" class="form-select">
                                                <option value="">Select Room</option>
                                                @if ($Room->Type)
                                                    <option value="Single" selected>Single Bed</option>
                                                    <option value="Double" selected>Double Bed</option>
                                                    <option value="Tripe" selected>Tripple Bed</option>

                                                    @else
                                                        <option value="Single">Single Bed</option>
                                                        <option value="Double">Double Bed</option>
                                                        <option value="Tripe">Tripple Bed</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="Geyser" class="form-label col-md-4">Geyser:</label>
                                        <div class="col-md-7">
                                            <div class="form-check form-check-inline ml-1">
                                                <input type="radio" class="form-check-input" name="Geyser" value="1"  @if ($Room->Geyser) checked @endif>
                                                <label for="" class="form-check-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline ml-4">
                                                <input type="radio" class="form-check-input" name="Geyser" value="0"  @if (!$Room->Geyser) checked @endif>
                                                <label for="" class="form-check-label">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="AC" class="form-label col-md-4">AC:</label>
                                        <div class="col-md-7">
                                            <div class="form-check form-check-inline ml-1">
                                                <input type="radio" class="form-check-input" name="AC" value="1" @if($Room->Ac) checked @endif>
                                                <label for="" class="form-check-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline ml-4">
                                                <input type="radio" class="form-check-input" name="AC" value="0" @if(!$Room->Ac) checked @endif>
                                                <label for="" class="form-check-label">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="Balcony" class="form-label col-md-4">Balcony:</label>
                                        <div class="col-md-7">
                                            <div class="form-check form-check-inline ml-1">
                                                <input type="radio" class="form-check-input" name="Balcony" value="1" @if ($Room->Balcony) checked @endif>
                                                <label for="" class="form-check-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline ml-4">
                                                <input type="radio" class="form-check-input" name="Balcony" value="0" @if (!$Room->Balcony) checked @endif>
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
                                        <label for="Bathtub" class="form-label col-md-4 py-0">Bathtub:</label>
                                        <div class="col-md-7">
                                            <div class="form-check form-check-inline ml-1">
                                                <input type="radio" class="form-check-input" name="Bathtub" value="1" @if ($Room->Bathtub) checked @endif>
                                                <label for="" class="form-check-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline ml-4">
                                                <input type="radio" class="form-check-input" name="Bathtub" value="0" @if (!$Room->Bathtub) checked @endif>
                                                <label for="" class="form-check-label">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="HiComode" class="form-label col-md-4">HiComode:</label>
                                        <div class="col-md-7">
                                            <div class="form-check form-check-inline ml-1">
                                                <input type="radio" class="form-check-input" name="HiComode" value="1" @if ($Room->HiComode) checked @endif>
                                                <label for="" class="form-check-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline ml-4">
                                                <input type="radio" class="form-check-input" name="HiComode" value="0" @if (!$Room->HiComode) checked @endif>
                                                <label for="" class="form-check-label">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="Locker" class="form-label col-md-4">Locker:</label>
                                        <div class="col-md-7">
                                            <div class="form-check form-check-inline ml-1">
                                                <input type="radio" class="form-check-input" name="Locker" value="1" @if ($Room->Locker) checked @endif>
                                                <label for="" class="form-check-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline ml-4">
                                                <input type="radio" class="form-check-input" name="Locker" value="0" @if (!$Room->Locker) checked @endif>
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
                                        <label for="Freeze" class="form-label col-md-4">Freeze:</label>
                                        <div class="col-md-7">
                                            <div class="form-check form-check-inline ml-1">
                                                <input type="radio" class="form-check-input" name="Freeze" value="1" @if ($Room->Freeze) checked @endif>
                                                <label for="" class="form-check-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline ml-4">
                                                <input type="radio" class="form-check-input" name="Freeze" value="0" @if (!$Room->Freeze) checked @endif>
                                                <label for="" class="form-check-label">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="Internet" class="form-label col-md-4">Internet:</label>
                                        <div class="col-md-7">
                                            <div class="form-check form-check-inline ml-1">
                                                <input type="radio" class="form-check-input" name="Internet" value="1" @if ($Room->Internet) checked @endif>
                                                <label for="" class="form-check-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline ml-4">
                                                <input type="radio" class="form-check-input" name="Internet" value="0" @if (!$Room->Internet) checked @endif>
                                                <label for="" class="form-check-label">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="Intercom" class="form-label col-md-4">Intercom:</label>
                                        <div class="col-md-7">
                                            <div class="form-check form-check-inline ml-1">
                                                <input type="radio" class="form-check-input" name="Intercom" value="1" @if ($Room->Intercom) checked @endif>
                                                <label for="" class="form-check-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline ml-4">
                                                <input type="radio" class="form-check-input" name="Intercom" value="0" @if (!$Room->Intercom) checked @endif>
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
                                        <label for="TV" class="form-label col-md-4">TV:</label>
                                        <div class="col-md-7">
                                            <div class="form-check form-check-inline ml-1">
                                                <input type="radio" class="form-check-input" name="TV" value="1" @if ($Room->TV) checked @endif>
                                                <label for="" class="form-check-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline ml-4">
                                                <input type="radio" class="form-check-input" name="TV" value="0" @if (!$Room->TV) checked @endif>
                                                <label for="" class="form-check-label">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="Wardrobe" class="form-label col-md-4">Wardrobe:</label>
                                        <div class="col-md-7">
                                            <div class="form-check form-check-inline ml-1">
                                                <input type="radio" class="form-check-input" name="Wardrobe" value="1" @if ($Room->Wardrobe) checked @endif>
                                                <label for="" class="form-check-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline ml-4">
                                                <input type="radio" class="form-check-input" name="Wardrobe" value="0" @if (!$Room->Wardrobe) checked @endif>
                                                <label for="" class="form-check-label">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="Price" class="form-label col-md-3">Price:</label>
                                        <div class="col-md-8">
                                            <input type="number" name="Price" class="form-control" value="{{ $Room->Price}}"">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="AdditionalFeatures" class="form-label col-md-4">AdditionalFeatures:</label>
                                        <div class="col-md-7">
                                            <select type="text" name="AdditionalFeatures" id=""  class="form-select">
                                                <option>Open this select menu</option>
                                                <option value="">Flower Top</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="Status" class="form-label col-md-4">Status:</label>
                                        <div class="col-md-6">
                                            <div class="form-check form-check-inline ml-1">
                                                <input type="radio" class="form-check-input" name="Status" value="1">
                                                <label for="" class="form-check-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline ml-4">
                                                <input type="radio" class="form-check-input" name="Status" value="0">
                                                <label for="" class="form-check-label">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </div> --}}

                        </div>
                        <div class="card-footer">
                            {{-- <input type="submit" name="submit" id="" class="btn btn-danger float-right w-25 text-capitalize" value="Reset"> --}}
                            <input type="submit" name="submit" id="" class="btn bg-navy float-right w-25 text-capitalize" value="Update">
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
        
