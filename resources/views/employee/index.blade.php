@extends('layouts.app')
@section('content')
<div class="container py-5 col-md-12 m-auto" style="width:100% ;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-defult">
                    <div class="card-title">
                        <h2 class="card-title">
                            <!-- <a href="{{ asset('employee/create') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking">
                                <i class="fa-solid fa-circle-plus mr-2"></i>
                                Add
                            </a> -->
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
</div>
<script>
    $(document).ready(function(){
        $.noConflict();
        var EmployeeList = $('#Employeelist').DataTable({
            processing:true,
            colReorder:true,
            serverSide:true,
            stateSave :true,
            responsive:true,
            buttons:['copy','excel','pdf'],
            ajax:{
                url : "/employee",
                type: "GET"
            },
            columns:
            [
                {data : 'Hotel'},
                {data : 'Name'},
                {data : 'Designation'},
                {data : 'Phone'},
                {data : 'Email'},
                {data : 'DateOfJoin'},
                {data : 'Status'},
                {data : 'action',name:'action'},
            ]
        });
        $('#AddNewBtn').on('click',function(e){
            e.preventDefault();
            $('#newEmployeeModal').modal('show'); 
        });
        $('#formResetBtn').on('click',function(e){
            e.preventDefault();
            $('#newCreateEmployee')[0].reset();
        });
        $('#submitBtn').on('click',function(e){
            e.preventDefault();
            $.ajax({
                type    : 'POST',
                url     : '/employee',
                data    : $('#newCreateEmployee').serialize(),success:function(data){
                    $('#newCreateEmployee')[0].reset();
                    $('#newEmployeeModal').modal('hide'); 
                    Swal.fire(
                        'Success!',
                        data,
                        'success'
                    );
                },
                error:function(data){
                    console.log('Error while adding new Bank'+data);
                },
            });
        });
        $('.DeleteBtn').on('click',function(e) {
            e.preventDefault();
            var ID = $(this).val();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result)=>{
                if(result.isConfirmed){
                    $.ajax({
                        type    :   "GET",
                        url     : "/employee/delete/"+ID,
                        success:function(data){
                            Swal.fire(
                              'Deleted!',
                              'Your file has been deleted.',
                              'success'
                            );
                        },
                        error:function(data){
                            Swal.fire(
                              'Error!',
                              'Delete failed !',
                              'error'
                            );

                            console.log(data);
                        },
                    });
                }
            });
        });
        $('.EditBtn').on('click',function(e) {
            e.preventDefault();
            var ID = $(this).val();
            $.ajax({
                type    : 'GET',
                url     : '/employee/'+ID,
                data    : $('updateForm').serializeArray(),
                success:function(data){
                    // console.log(data['Name']);
                    $('#updateForm')[0].reset();
                    $('#IDEdit').val(data['id']);
                    $('#HotelIDEdit').val(data['HotelID']);
                    $('#EditName').val(data['Name']);
                    $('#DesignationEdit').val(data['Designation']);
                    $('#DateOfBirthEdit').val(data['DateOfBirth']);
                    $('#NIDNoEdit').val(data['NIDNo']);
                    $('#NIDEdit').val(data['NID']);
                    $('#PhoneEdit').val(data['Phone']);
                    $('#EmailEdit').val(data['Email']);
                    $('#AddressEdit').val(data['Address']);
                    $('#DateOfJoinEdit').val(data['DateOfJoin']);
                    $('#StatusEdit').val(data['Status']);
                    $('#EditEmployeeModal').modal('show');
                },
                error:function(data){
                    console.log(data);
                },
            });
        });
        $('#updateBtn').on('click',function(e) {
                e.preventDefault();
                var ID = $('#IDEdit').val();
                $.ajax({
                    type    : 'PATCH',
                    url     : '/employee/'+ID,
                    data    : $('#updateForm').serializeArray(),
                    success:function(data){
                        $('#EditEmployeeModal').modal('hide');
                        $('#updateForm')[0].reset();
                        Swal.fire(
                          'Success!',
                          data,
                          'success'
                        );
                    },
                    error:function(data){
                        console.log(data);
                    },
                });
            });
    });
</script>
@endsection