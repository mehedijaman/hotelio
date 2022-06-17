@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="/room" class="btn btn-primary">Back to List</a>
        {!! Form::open(array('url'=>'/room' , 'method'=>'POST')) !!}
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
                                            <select name="HotelID" id="">
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
                                            <input class="input--style-5" type="text" name="RoomNo">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Floor</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Floor">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Type</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Type">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Geyser</div>
                                    <div class="Geyser">
                                        <div class="p-t-15">
                                            <label class="radio-container m-r-55">Yes
                                                <input type="radio" value="1" name="Geyser">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">No
                                                <input type="radio" value="0" name="Geyser">
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
                                                    <input type="radio" name="AC" value="1">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="AC" value="0">
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
                                                    <input type="radio"  name="Balcony" value="1">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="Balcony" value="0">
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
                                                    <input type="radio" name="Bathtub" value="1">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="Bathtub" value="0">
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
                                                    <input type="radio"  name="HiComode" value="1">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="HiComode" value="0">
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
                                                    <input type="radio"  name="Locker" value="1">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="Locker" value="0">
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
                                                    <input type="radio"  name="Freeze" value="1">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="Freeze" value="0">
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
                                                    <input type="radio"  name="Internet" value="1">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="Internet" value="0">
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
                                                    <input type="radio"  name="Intercom" value="1">
                                                    <span class="checkmark"></span>
                                                </label>

                                                <label class="radio-container">No
                                                    <input type="radio" name="Intercom" value="0"> 
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
                                                    <input type="radio"  name="TV" value="1"> 
                                                    <span class="checkmark"></span>
                                                </label>

                                                <label class="radio-container">No
                                                    <input type="radio" name="TV" value="0">
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
                                                    <input type="radio"  name="Wardrobe" value="1">
                                                    <span class="checkmark"></span>
                                                </label>

                                                <label class="radio-container">No
                                                    <input type="radio" name="Wardrobe" value="0">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                      </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Price</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="number" name="Price">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="form-row">
                                    <div class="name">Additional Features</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-2" type="checkbox" name="Tiles" value="1"> Tiles
                                            <input class="input--style-2" type="checkbox" name="Mozaik" value="1"> Mozaik
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="form-row">
                                    <div class="name">Status</div>
                                      <div class="Status">
                                          <div class="p-t-15">

                                                <label class="radio-container m-r-55">Yes
                                                    <input type="radio"  name="Status" value="1">
                                                    <span class="checkmark"></span>
                                                </label>

                                                <label class="radio-container">No
                                                    <input type="radio" name="Status" value="2">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                      </div>
                                </div>

                                <div>
                                    <button class="btn btn--radius-2 btn-lg btn-block bg-gray" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        {!! Form::close() !!}
    </div>
@endsection
