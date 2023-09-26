@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12 m-auto">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <button type="button" class="btn bg-navy text-capitalize mr-3" id="AddNewBtn"><i class="fa-solid fa-circle-plus mr-2"></i>Add New</button>
                                Hotel List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/hotel/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>

                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/hotel/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                    </div>
                    <div class="card-body table-responsive p-0">

                        <table class="table table-hover table-responsive" id="HotelList">

                            <thead>
                                <tr class="border-bottom">
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Reg NO</th>
                                    <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                            </tbody>

                        </table>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade show" id="NewHotelModal"  role="dialog">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New Hotel</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="formClose">
                         <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('url' => '/hotel','method' => 'POST','class'=>'form-horizontal', 'id'=> 'NewHotelForm' ,'files' => true)) }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="Name" class="form-label col-md-3">Name :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Title" class="form-label col-md-3">Title :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Email" class="form-label col-md-3">Email :</label>
                                    <div class="col-md-8">
                                        <input type="mail" name="Email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Address" class="form-label col-md-3">Address :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Address" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Phone" class="form-label col-md-3">Phone :</label>
                                    <div class="col-md-8">
                                        <input type="tel" name="Phone" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="RegNo" class="form-label col-md-3">Reg No :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="RegNo" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Logo" class="form-label col-md-3">Logo :</label>
                                    <div class="col-md-8">
                                        <input type="file" name="Logo" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Photo" class="form-label col-md-3">Photo :</label>
                                    <div class="col-md-8">
                                        <input type="file" name="Photo" class="form-control">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <!-- <input type="submit" name="submit" id="" class="btn btn-danger float-right w-25 ml-2" value="Reset"> -->
                                    <input type="submit" name="submit" id="SubmitBtn" class="btn bg-navy float-right w-25 text-capitalize">
                                    <button type="button" id="ResetFormBtn" class="btn btn-default ">Reset</button>
                                </div>
                            </div>
                        {{ Form::close()}}
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade show" id="EditHotelModal"  role="dialog">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Hotel</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="formClose">
                         <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('method' => 'PATCH','id' => 'UpdateForm','class'=>'form-horizontal','id' => 'UpdateHotelForm' ,'files' => true)) }}
                        <input type="hidden" name="ID" id="IDEdit">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Name" class="form-label col-md-3">Name :</label>
                                <div class="col-md-8">
                                    <input type="text" name="Name" class="form-control" id="NameEdit">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Title" class="form-label col-md-3">Title :</label>
                                <div class="col-md-8">
                                    <input type="text" name="Title" class="form-control" id="TitleEdit">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Email" class="form-label col-md-3">Email :</label>
                                <div class="col-md-8">
                                    <input type="mail" name="Email" class="form-control" id="EmailEdit">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Address" class="form-label col-md-3">Address :</label>
                                <div class="col-md-8">
                                    <input type="text" name="Address" class="form-control" id="AddressEdit">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Phone" class="form-label col-md-3">Phone :</label>
                                <div class="col-md-8">
                                    <input type="tel" name="Phone" class="form-control" id="PhoneEdit">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="RegNo" class="form-label col-md-3">Reg No :</label>
                                <div class="col-md-8">
                                    <input type="text" name="RegNo" class="form-control" id="RegNoEdit">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Logo" class="form-label col-md-3">Logo :</label>
                                <div class="col-md-8">
                                    <input type="file" name="Logo" class="form-control" id="LogoEdit">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Photo" class="form-label col-md-3">Photo :</label>
                                <div class="col-md-8">
                                    <input type="file" name="Photo" class="form-control" id="PhotoEdit">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" name="submit" id="UpdateBtn" class="btn bg-success float-right w-25 text-capitalize" >Update </button>
                            </div>
                        </div>
                    {{ Form::close()}}
                    </div>
                    <!-- <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
            </div>
        </div>

    </div>

    <script src="{{asset('js/custom-js/hotle.js')}}"></script>

@endsection
