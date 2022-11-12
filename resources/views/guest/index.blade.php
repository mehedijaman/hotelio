@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-10 m-auto">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <button type="button" class="btn bg-navy text-capitalize mr-3" id="NewAddBtn"><i class="fa-solid fa-circle-plus mr-2"></i>Add New</button>
                                Guest List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/guest/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/guest/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                    </div>
                    <div class="card-body table-responsive p-0 ">
                        <table class="table table-hover table-responsive table-borderless" id="GuestTable">
                            <thead>
                                <tr class="border-bottom">
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
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
        <div class="modal fade show" id="NewGuestModal" role="dialog">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New Guest</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('url' => '/guest','method' => 'POST','class'=>'form-horizontal', 'files' => true , 'id' => 'guestForm')) }}
                        <div class="card-body">
                            <div class="col-md-12 form-group row">
                                <div class="form-group row col-md-6">
                                    <label for="Name" class="form-label col-md-3">Name :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="Name" class="form-control" placeholder="Enater Guset Name"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Email" class="form-label col-md-3">Email :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="mail" name="Email" class="form-control" placeholder="Enter Guest Mail"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group row">
                                <div class="form-group row col-md-6">
                                    <label for="Address" class="form-label col-md-3">Address :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="Address" class="form-control" placeholder="Enter Guest Address"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Phone" class="form-label col-md-3">Phone :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="tel" name="Phone" class="form-control" placeholder="Enter Guest Number"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group row">
                                <div class="form-group row col-md-6">
                                    <label for="NIDNo" class="form-label col-md-3">NID No :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="NIDNo" class="form-control" placeholder="Enter Guest NID NO"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="NID" class="form-label col-md-3">NID :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="file" name="NID" class="form-control"> 
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-12 form-group row">
                                <div class="form-group row col-md-6">
                                    <label for="PassportNo" class="form-label col-md-3">Passport No :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="PassportNo" class="form-control" placeholder="Enter Guest Passport NO"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Passport" class="form-label col-md-3">Passport :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="file" name="Passport" class="form-control"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group row">
                                <div class="form-group row col-md-6">
                                    <label for="Father" class="form-label col-md-3">Father :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="Father" class="form-control" placeholder="Enter Guest's Father Name "> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Mother" class="form-label col-md-3">Mother :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="Mother" class="form-control"  placeholder="Enter Guest's Mother Name "> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group row">
                                <div class="form-group row  col-md-6">
                                    <label for="Spouse" class="form-label col-md-3">Spouse :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="Spouse" class="form-control"> 
                                    </div>
                                </div>
                            
                                <div class="form-group row col-md-6">
                                    <label for="Photo" class="form-label col-md-3">Photo :</label>
                                    <div class="col-md-8  mx-md-2 ">
                                        <input type="file" name="Photo" class="form-control"> 
                                    </div>
                                </div>
                            </div>
                        
                            <div class="card-footer">
                                <input type="submit" name="submit" id="submitBtn" class="btn bg-navy float-right w-25 text-capitalize">
                                <button type="button" id="formResetBtn" class="btn btn-default ">Reset</button>
                            </div>
                        </div>
                    {{ Form::close()}}  
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade show" id="EditGuestModal" role="dialog">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h4 class="modal-title">Update  Guest</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('method' => 'PATCH','class'=>'form-horizontal','id'=>'updateGuestForm' ,'files' => true)) }}
                        <input type="hidden" name="ID" id="IDEdit">
                        <div class="card-body">
                            <div class="col-md-12 form-group row">
                                <div class="form-group row col-md-6">
                                    <label for="Name" class="form-label col-md-3">Name :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="Name" class="form-control" id="EditName"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Email" class="form-label col-md-3">Email :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="mail" name="Email" class="form-control" id="EditEmail"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group row">
                                <div class="form-group row col-md-6">
                                    <label for="Address" class="form-label col-md-3">Address :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="Address" class="form-control" id="EditAddress"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Phone" class="form-label col-md-3">Phone :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="tel" name="Phone" class="form-control" id="EditPhone"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group row">
                                <div class="form-group row col-md-6">
                                    <label for="NIDNo" class="form-label col-md-3">NID No :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="NIDNo" class="form-control" id="EditNIDNo"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="NID" class="form-label col-md-3">NID :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="file" name="NID" class="form-control" id="EditNID"> 
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-12 form-group row">
                                <div class="form-group row col-md-6">
                                    <label for="PassportNo" class="form-label col-md-3">Passport No :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="PassportNo" class="form-control" id="EditPassportNo"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Passport" class="form-label col-md-3">Passport :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="file" name="Passport" class="form-control" id="EditPassport"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group row">
                                <div class="form-group row col-md-6">
                                    <label for="Father" class="form-label col-md-3">Father :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="Father" class="form-control" id="EditFather" > 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Mother" class="form-label col-md-3">Mother :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="Mother" class="form-control" id="EditMother"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                <div class="form-group row  col-md-6">
                                    <label for="Spouse" class="form-label col-md-3">Spouse :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="text" name="Spouse" class="form-control" id="EditSpouse"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Photo" class="form-label col-md-3">Photo :</label>
                                    <div class="col-md-8 mx-md-2">
                                        <input type="file" name="Photo" class="form-control" id="EditPhoto"> 
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" name="submit" id="UpdateBtn" class="btn bg-success float-right w-25 text-capitalize">Update</button>
                            </div>
                        </div>
                    {{ Form::close()}}  
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade show" id="ShowGuestModal" role="dialog">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h4 class="modal-title">Show All information on Guest</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <table class="table table-resonsive table-bordered table-stripped table-condensed ">
                            <tr>
                                <th class="bg-success ">Attribute</th>
                                <th class="bg-success ">Data</th>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td id="ViewName"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td id="ViewEmail"></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td id="ViewPhone"></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td id="ViewAddress"></td>
                            </tr>
                            <tr>
                                <td>NID No</td>
                                <td id="ViewNIDNo"></td>
                            </tr>
                            <tr>
                                <td>NID</td>
                                <td id="ViewNID"></td>
                            </tr>
                            <tr>
                                <td>Passport No</td>
                                <td id="ViewPassportNo"></td>
                            </tr>
                            <tr>
                                <td>Passport</td>
                                <td id="ViewPassport"></td>
                            </tr>
                            <tr>
                                <td>Father</td>
                                <td id="ViewFather"></td>
                            </tr>
                            <tr>
                                <td>Mother</td>
                                <td id="ViewMother"></td>
                            </tr>
                            <tr>
                                <td>Spouse</td>
                                <td id="ViewSpouse"></td>
                            </tr>
                            <tr>
                                <td>Photo</td>
                                <td id="ViewPhoto"></td>
                            </tr>
                         </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/custom-js/guest.js"></script>
@endsection