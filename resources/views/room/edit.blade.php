@extends('layouts.app')
@section('content')

    <div class="container">
         <section class="button__list__show mb-md-4">
            <a href="{{ asset('room') }}" class="btn btn-md btn-info py-3 text-capitalize">Room List</a>
        </section>
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Update Bank</h3>
                    </div>
                    {{ Form::open(array('url' => '/room/'.$Rooms->id,'method' => 'PATCH','class'=>'form-horizontal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Type" class="form-label col-md-3">Hotel</label>
                                <div class="value">
                                    <div class="input-group">
                                        <select name="HotelID" id="" class="col-md-8">
                                            <option value="">Select Hotel</option>
                                            @foreach($Hotels as $Hotel)
                                            <option value="{{ $Hotel->id }}"> {{ $Hotel->Name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="RoomNo" class="form-label col-md-3">Room No:</label>
                                <div class="col-md-8">
                                    <input type="text" name="RoomNo" class="form-control" value="{{$Rooms->RoomNo}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Floor" class="form-label col-md-3">Floor:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Floor" class="form-control" value="{{$Rooms->Floor}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Type" class="form-label col-md-3">Type</label>
                                <div class="col-md-8">
                                    <input type="text" name="Type" class="form-control" value="{{$Rooms->Type}}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Geyser" class="form-label col-md-3">Geyser</label>
                                <div class="Geyser">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Yes
                                            <input type="radio" value="1" name="Geyser" value="{{$Rooms->Geyser}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" value="0" name="Geyser" value="{{$Rooms->Geyser}}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="AC" class="form-label col-md-3">AC</label>
                                <div class="AC">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Yes
                                            <input type="radio" value="1" name="AC" value="{{$Rooms->AC}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" value="0" name="AC" value="{{$Rooms->AC}}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Balcony" class="form-label col-md-3">Balcony</label>
                                <div class="Balcony">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Yes
                                            <input type="radio" value="1" name="Balcony" value="{{$Rooms->Balcony}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" value="0" name="Balcony" value="{{$Rooms->Balcony}}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Bathtub" class="form-label col-md-3">Bathtub</label>
                                <div class="Bathtub">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Yes
                                            <input type="radio" value="1" name="Bathtub" value="{{$Rooms->Bathtub}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" value="0" name="Bathtub" value="{{$Rooms->Bathtub}}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="HiComode" class="form-label col-md-3">HiComode</label>
                                <div class="HiComode">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Yes
                                            <input type="radio" value="1" name="HiComode" value="{{$Rooms->HiComode}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" value="0" name="HiComode" value="{{$Rooms->HiComode}}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Locker" class="form-label col-md-3">Locker</label>
                                <div class="Locker">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Yes
                                            <input type="radio" value="1" name="Locker" value="{{$Rooms->Locker}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" value="0" name="Locker" value="{{$Rooms->Locker}}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Freeze" class="form-label col-md-3">Freeze</label>
                                <div class="Freeze">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Yes
                                            <input type="radio" value="1" name="Freeze" value="{{$Rooms->Freeze}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" value="0" name="Freeze" value="{{$Rooms->Freeze}}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Internet" class="form-label col-md-3">Internet</label>
                                <div class="Internet">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Yes
                                            <input type="radio" value="1" name="Internet" value="{{$Rooms->Internet}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" value="0" name="Internet" value="{{$Rooms->Internet}}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Intercom" class="form-label col-md-3">Intercom</label>
                                <div class="Intercom">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Yes
                                            <input type="radio" value="1" name="Intercom" value="{{$Rooms->Intercom}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" value="0" name="Intercom" value="{{$Rooms->Intercom}}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="TV" class="form-label col-md-3">TV</label>
                                <div class="TV">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Yes
                                            <input type="radio" value="1" name="TV" value="{{$Rooms->TV}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" value="0" name="TV" value="{{$Rooms->TV}}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Wardrobe" class="form-label col-md-3">Wardrobe</label>
                                <div class="Wardrobe">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Yes
                                            <input type="radio" value="1" name="Wardrobe" value="{{$Rooms->Wardrobe}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" value="0" name="Wardrobe" value="{{$Rooms->Wardrobe}}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Price" class="form-label col-md-3">Price:</label>
                                <div class="col-md-8">
                                    <input type="num" name="Price" class="form-control" value="{{$Rooms->Price}}"> 
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label for="AdditionalFeatures" class="form-label col-md-3">AdditionalFeatures:</label>
                                <div class="col-md-8">
                                    <input type="text" name="AdditionalFeatures" class="form-control"> 
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <label for="Status" class="form-label col-md-3">Status</label>
                                <div class="Status">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Yes
                                            <input type="radio" value="1" name="Status" value="{{$Rooms->Status}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" value="0" name="Status" value="{{$Rooms->Status}}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" id="" class="btn btn-danger float-right w-25" value="Reset">
                            <input type="submit" name="submit" id="" class="btn btn-info float-right w-25 mx-md-3 px-md-2">
                        </div>
                    {{ Form::close()}} 
                </div>
            </div>
        </div>
    </div>
@endsection
