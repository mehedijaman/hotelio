@extends('layouts.app')
@section('content')
<div class="container py-5 col-md-12 m-auto" style="width:100% ;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-defult">
                    <div class="card-title">
                        <h2 class="card-title">
                            <button type="button" class="btn bg-navy text-capitalize mr-3" id="AddNewBtn"><i class="fa-solid fa-circle-plus mr-2"></i>Add New</button>
                            Employee List
                        </h2>
                    </div>
                    <a class="btn btn-sm bg-navy float-right text-capitalize" href="/employee/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                    <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/employee/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                </div>
                <div class="card-body table-responsive p-0 col-md-12">
                    <table class="table table-hover table-responsive table-borderless " id="Employeelist">

                        <thead class="">
                            <tr class="border-bottom ">
                                <th>Hotel Name</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Date Of Join</th>
                                <th>Status</th>
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
    <div class="modal fade show" id="newEmployeeModal" role="dialog">
        <div class="modal-dialog modal-xl ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ Form::open(array('url' => '/employee','method' => 'POST','class'=>'form-horizontal', 'files' => true , 'id' => 'newCreateEmployee')) }}
                            <div class="card-body ">
                                <div class="form-group row col-md-12">
                                    <div class="form-group row col-md-6">
                                        <label for="HotelID" class="form-label col-md-3">Hotel</label>
                                        <div class="col-md-8">
                                            <select name="HotelID" id="" class="form-select" required>
                                                <option value="">Select Hotel</option>
                                                @foreach($Hotels as $Hotel)
                                                <option value="{{ $Hotel->id }}"> {{ $Hotel->Name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row col-md-6">
                                        <label for="Name" class="form-label col-md-3">Name :</label>
                                        <div class="col-md-8">
                                            <input type="text" name="Name" class="form-control"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row col-md-12">
                                    <div class="form-group row col-md-6">
                                        <label for="Designation" class="form-label col-md-3">Designation :</label>
                                        <div class="col-md-8">
                                            <input type="text" name="Designation" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group row col-md-6">
                                        <label for="DateOfBirth" class="form-label col-md-3">Date Of Birth :</label>
                                        <div class="col-md-8">
                                            <input type="date" name="DateOfBirth" class="form-control"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row col-md-12">
                                    <div class="form-group row col-md-6">
                                        <label for="NIDNo" class="form-label col-md-3">NID No :</label>
                                        <div class="col-md-8">
                                            <input type="text" name="NIDNo" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group row col-md-6">
                                        <label for="NID" class="form-label col-md-3">NID :</label>
                                        <div class="col-md-8">
                                            <input type="file" name="NID" class="form-control"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row col-md-12">
                                    <div class="form-group row col-md-6">
                                        <label for="Phone" class="form-label col-md-3">Phone :</label>
                                        <div class="col-md-8">
                                            <input type="tel" name="Phone" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group row col-md-6">
                                        <label for="Email" class="form-label col-md-3">Email :</label>
                                        <div class="col-md-8">
                                            <input type="mail" name="Email" class="form-control"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row col-md-12">
                                    <div class="form-group row col-md-6">
                                        <label for="Address" class="form-label col-md-3">Address :</label>
                                        <div class="col-md-8">
                                            <input type="text" name="Address" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group row col-md-6">
                                        <label for="DateOfJoin" class="form-label col-md-3">Date Of Join :</label>
                                        <div class="col-md-8">
                                            <input type="date" name="DateOfJoin" class="form-control"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="form-label col-md-3">Status :</label>
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">yes
                                            <input type="radio" name="Status" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" name="Status" value="0">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" name="submit" id="submitBtn" class="btn bg-navy float-right w-25 text-capitalize">
                                    <button type="button" id="formResetBtn" class="btn btn-default ">Reset</button>
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
    <div class="modal fade show" id="EditEmployeeModal" role="dialog">
        <div class="modal-dialog modal-xl ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ Form::Open(array('method' => 'PATCH', 'class' => 'form-horizontal','id'=>'updateForm', 'files' => true)) }}
                    <input type="hidden" name="ID" id="IDEdit">
                        <div class="card-body">
                            <div class="form-group row col-md-12">
                                <div class=" form-group row col-md-6">
                                    <label for="HotelID" class="form-label col-md-3">Hotel</label>
                                    <div class=" col-md-8">
                                        <select name="HotelID" id="HotelIDEdit" class="form-selec form-control" required>
                                            <option value="">Select Hotel</option>
                                            @foreach($Hotels as $Hotel)
                                            <option value="{{ $Hotel->id }}"> {{ $Hotel->Name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Name" class="form-label col-md-3">Name :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Name" class="form-control" id="EditName"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                <div class="form-group row col-md-6" >
                                    <label for="Designation" class="form-label col-md-3">Designation :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Designation" class="form-control" id="DesignationEdit"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="DateOfBirth" class="form-label col-md-3">Date Of Birth :</label>
                                    <div class="col-md-8">
                                        <input type="date" name="DateOfBirth" class="form-control" id="DateOfBirthEdit"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                <div class="form-group row col-md-6" >
                                    <label for="NIDNo" class="form-label col-md-3">NID No :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="NIDNo" class="form-control" id="NIDNoEdit"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="NID" class="form-label col-md-3">NID :</label>
                                    <div class="col-md-8">
                                        <input type="file" name="NID" class="form-control" id="NIDEdit"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                <div class="form-group row col-md-6">
                                    <label for="Phone" class="form-label col-md-3">Phone :</label>
                                    <div class="col-md-8">
                                        <input type="tel" name="Phone" class="form-control" id="PhoneEdit"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="Email" class="form-label col-md-3">Email :</label>
                                    <div class="col-md-8">
                                        <input type="mail" name="Email" class="form-control" id="EmailEdit"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                <div class="form-group row col-md-6">
                                    <label for="Address" class="form-label col-md-3">Address :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Address" class="form-control" id="AddressEdit"> 
                                    </div>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="DateOfJoin" class="form-label col-md-3">Date Of Join :</label>
                                    <div class="col-md-8">
                                        <input type="date" name="DateOfJoin" class="form-control" id="DateOfJoinEdit"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-3">Status :</label>
                                <div class="p-t-15">
                                    <label class="radio-container m-r-55">yes
                                        <input type="radio" name="Status" value="1" id="StatusEdit"  >
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">No
                                        <input type="radio" name="Status" value="0" id="StatusEdit" >
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" name="submit" id="updateBtn" class="btn bg-success float-right w-25 text-capitalize" >Update</button>
                            </div>
                        </div>
                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" id="ShowEmployeeModal" role="dialog">
        <div class="modal-dialog modal-xl ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Show All Information on  Employee</h4>
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
                            <td>Hotel Name </td>
                            <td id="ViewHotle"></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td id="ViewName"></td>
                        </tr>
                        <tr>
                            <td>Date Of Birth</td>
                            <td id="ViewDateOfBirth"></td>
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
                            <td>Phone</td>
                            <td id="ViewPhone"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td id="ViewEmail"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td id="ViewAddress"></td>
                        </tr>
                        <tr>
                            <td>Designation</td>
                            <td id="ViewDesignation"></td>
                        </tr>
                        <tr>
                            <td>Date Of Join</td>
                            <td id="ViewDateOfJoin"></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td id="ViewStatus"></td>
                        </tr>
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/custom-js/employee.js"></script>
@endsection