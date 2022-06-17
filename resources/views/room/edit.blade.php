@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="/room" class="btn btn-primary">Back to List</a>
        {!! Form::open(array('url'=>'/room/'.$Rooms->id , 'method'=>'PATCH')) !!}
        
            <div class="page-wrapper  p-t-45 p-b-50">
                <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading bg-light">
                            <h2 class="title text-dark">Room Form</h2>
                            <hr style="width:100%;text-align:left;margin-left:0; background-color:red;">
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-row">
                                    <div class="name">Hotel</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <select name="HoteID" id="">
                                                <option value="">Select Hotel</option>
                                                @foreach($Hotels as $Hotel)
                                                <option value="{{ $Hotel->id }}"> {{ $Hotel->Name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Room No</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="RoomNo" value="{{$Rooms->RoomNo}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Floor</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Floor" value="{{$Rooms->Floor}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Type</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="AccountNo" value="{{$Rooms->AccountNo}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Geyser</div>
                                    <div class="Geyser">
                                          <div class="p-t-15">
                                                <label class="radio-container m-r-55">Yes
                                                    <input type="radio"  name="Geyser" value="{{$Rooms->Geyser}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="Geyser" value="{{$Rooms->Geyser}}">>
                                                    <span class="checkmark"></span>
                                                </label>
                                          </div>
                                    </div>
                              </div>

                                <div class="form-row">
                                    <div class="name">AC</div>
                                      <div class="AC">
                                          <div class="p-t-15">
                                                <label class="radio-container m-r-55">Yes
                                                    <input type="radio" name="AC" value="{{$Rooms->AC}}">>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="AC" value="{{$Rooms->AC}}">>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                      </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Balcony</div>
                                      <div class="Balcony">
                                          <div class="p-t-15">
                                                <label class="radio-container m-r-55">Yes
                                                    <input type="radio"  name="Balcony" value="{{$Rooms->Balcony}}">>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="Balcony" value="{{$Rooms->Balcony}}">>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                      </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Bathtub</div>
                                      <div class="Bathtub">
                                          <div class="p-t-15">
                                                <label class="radio-container m-r-55">Yes
                                                    <input type="radio" name="Bathtub" value="{{$Rooms->Bathtub}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="Bathtub" value="{{$Rooms->Bathtub}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                      </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">HiComode</div>
                                      <div class="HiComode">
                                          <div class="p-t-15">
                                                <label class="radio-container m-r-55">Yes
                                                    <input type="radio"  name="HiComode" value="{{$Rooms->HiComode}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="HiComode" value="{{$Rooms->HiComode}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                      </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Locker</div>
                                      <div class="Locker">
                                          <div class="p-t-15">
                                                <label class="radio-container m-r-55">Yes
                                                    <input type="radio"  name="Locker" value="{{$Rooms->Locker}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="Locker" value="{{$Rooms->Locker}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                      </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Freeze</div>
                                      <div class="Freeze">
                                          <div class="p-t-15">
                                                <label class="radio-container m-r-55">Yes
                                                    <input type="radio"  name="Freeze" value="{{$Rooms->Freeze}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="Freeze" value="{{$Rooms->Freeze}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                      </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Internet</div>
                                      <div class="Internet">
                                          <div class="p-t-15">
                                                <label class="radio-container m-r-55">Yes
                                                    <input type="radio"  name="Internet" value="{{$Rooms->Internet}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="Internet" value="{{$Rooms->Internet}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                      </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Intercom</div>
                                      <div class="Intercom">
                                          <div class="p-t-15">

                                                <label class="radio-container m-r-55">Yes
                                                    <input type="radio"  name="Intercom" value="{{$Rooms->Intercom}}">
                                                    <span class="checkmark"></span>
                                                </label>

                                                <label class="radio-container">No
                                                    <input type="radio" name="Intercom" value="{{$Rooms->Intercom}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                      </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">TV</div>
                                      <div class="TV">
                                          <div class="p-t-15">

                                                <label class="radio-container m-r-55">Yes
                                                    <input type="radio"  name="TV" value="{{$Rooms->TV}}">
                                                    <span class="checkmark"></span>
                                                </label>

                                                <label class="radio-container">No
                                                    <input type="radio" name="TV" value="{{$Rooms->TV}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                      </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Wardrobe</div>
                                      <div class="Wardrobe">
                                          <div class="p-t-15">

                                                <label class="radio-container m-r-55">Yes
                                                    <input type="radio"  name="Wardrobe"  value="{{$Rooms->Wardrobe}}">
                                                    <span class="checkmark"></span>
                                                </label>

                                                <label class="radio-container">No
                                                    <input type="radio" name="Wardrobe"  value="{{$Rooms->Wardrobe}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                      </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Price</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="number" name="Price" value="{{$Rooms->Price}}">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="form-row">
                                    <div class="name">Additional Features</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="AdditionalFeatures">
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="form-row">
                                    <div class="name">Status</div>
                                      <div class="Status">
                                          <div class="p-t-15">

                                                <label class="radio-container m-r-55">Yes
                                                    <input type="radio"  name="exist" value="{{$Rooms->Status}}">
                                                    <span class="checkmark"></span>
                                                </label>

                                                <label class="radio-container">No
                                                    <input type="radio" name="exist" value="{{$Rooms->Status}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                      </div>
                                </div>

                                <div>
                                    <button class="btn btn--radius-2 btn-lg btn-block bg-gray" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        {!! Form::close() !!}
    </div>
@endsection
