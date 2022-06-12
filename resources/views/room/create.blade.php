@extends('layouts.app')
@extends('layouts.Header')

@section('content')
    <div class="container-fluid">
        <a href="/room" class="btn btn-primary">Back to List</a>
        {!! Form::open(array('url'=>'/room' , 'method'=>'POST')) !!}
            <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
                <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading">
                            <h2 class="title">Room Form</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST">
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
                                            <input class="input--style-5" type="text" name="AccountNo">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Geyser</div>
                                    <div class="Geyser">
                                          <div class="p-t-15">
                                                <label class="radio-container m-r-55">Yes
                                                    <input type="radio" checked="checked" name="exist">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="exist">
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
                                                    <input type="radio" checked="checked" name="exist">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="exist">
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
                                                    <input type="radio" checked="checked" name="exist">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="exist">
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
                                                    <input type="radio" checked="checked" name="exist">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="exist">
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
                                                    <input type="radio" checked="checked" name="exist">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="exist">
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
                                                    <input type="radio" checked="checked" name="exist">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="exist">
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
                                                    <input type="radio" checked="checked" name="exist">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="exist">
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
                                                    <input type="radio" checked="checked" name="exist">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="exist">
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
                                                    <input type="radio" checked="checked" name="exist">
                                                    <span class="checkmark"></span>
                                                </label>
                                              
                                                <label class="radio-container">No
                                                    <input type="radio" name="exist">
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
                                                    <input type="radio" checked="checked" name="exist">
                                                    <span class="checkmark"></span>
                                                </label>
                                              
                                                <label class="radio-container">No
                                                    <input type="radio" name="exist">
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
                                                    <input type="radio" checked="checked" name="exist">
                                                    <span class="checkmark"></span>
                                                </label>
                                              
                                                <label class="radio-container">No
                                                    <input type="radio" name="exist">
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

                                <div class="form-row">
                                    <div class="name">Additional Features</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="AdditionalFeatures">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Status</div>
                                      <div class="Status">
                                          <div class="p-t-15">
                                               
                                                <label class="radio-container m-r-55">Yes
                                                    <input type="radio" checked="checked" name="exist">
                                                    <span class="checkmark"></span>
                                                </label>
                                              
                                                <label class="radio-container">No
                                                    <input type="radio" name="exist">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                      </div>
                                </div>

                                <div class="form-row p-t-20">
                                    <label class="label label--block">Are you an existing customer?</label>
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Yes
                                            <input type="radio" checked="checked" name="exist">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" name="exist">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        {!! Form::close() !!}
    </div>
@endsection
