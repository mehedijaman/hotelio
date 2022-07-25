@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-10 m-auto">
        <div class="row">
            <div class="col-md-10 m-auto">

                @if (Session::get('delete'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" arial-hide="true"></button>
                        <h5><i class="icon fas fa-trash-can"></i>Delete!</h5>
                        {{Session::get('delete')}}
                    </div>
                @endif
                @if (Session::get('destroyAll'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" arial-hide="true"></button>
                        <h5><i class="icon fas fa-trash-can"></i>Delete!</h5>
                        {{Session::get('destroyAll')}}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                {{-- <a href="{{ asset('guest/create') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking"> 
                                    <i class="fa-solid fa-circle-plus mr-2"></i>
                                    Add
                                </a> --}}
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
        <div class="modal fade show" id="NewGuestlModal" role="dialog">
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
        <div class="modal fade show" id="EditGuestlModal" role="dialog">
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
    </div>
    <script>
        $(document).ready(function(){
            $.noConflict();
            var GuestList = $('#GuestTable').DataTable({
                processing:true,
                serverSide:true,
                colReorder:true,
                stateSave:true,
                buttons:['copy','excel','pdf'],
                responsive:true,
                ajax:{
                    url : "/guest",
                    type: "GET"
                },
                columns:[
                    {data : 'Name'},
                    {data : 'Email'},
                    {data : 'Address'},
                    {data : 'Phone'},
                    {data : 'action',name:'action'},

                ],
            });

            $('#NewAddBtn').on('click',function(e){
                e.preventDefault();
                $('#NewGuestlModal').modal('show');
            });
            $('#formResetBtn').on('click',function(e){
                e.preventDefault();
                $('#guestForm')[0].reset();
            })
            $('#submitBtn').on('click',function(e) {
                e.preventDefault();
                $.ajax({
                    type    :'POST',
                    url     : '/guest',
                    data    : $('#guestForm').serialize(),success:function(data){
                        $('#guestForm')[0].reset();
                        $('#NewGuestlModal').modal('hide');
                        Swal.fire(
                          'Success!',
                          data,
                          'success'
                        );
                        GuestList.draw(false);
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
                }).then((result) => {
                  if (result.isConfirmed) {
                    $.ajax({
                        type:'GET',
                        url:'/guest/delete/'+ID,
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
                    url     : '/guest/'+ID,
                    data    : $('#updateGuestForm').serializeArray(),
                    success:function(data){
                        $('#updateGuestForm')[0].reset();
                        $('#IDEdit').val(data['id']);
                        $('#EditName').val(data['Name']);
                        $('#EditEmail').val(data['Email']);
                        $('#EditAddress').val(data['Address']);
                        $('#EditPhone').val(data['Phone']);
                        $('#EditNIDNo').val(data['NIDNo']);
                        $('#EditNID').val(data['NID']);
                        $('#EditPassportNo').val(data['PassportNo']);
                        $('#EditPassport').val(data['Passport']);
                        $('#EditFather').val(data['Father']);
                        $('#EditMother').val(data['Mother']);
                        $('#EditSpouse').val(data['Spouse']);
                        $('#EditPhoto').val(data['Photo']);
                        $('#EditGuestlModal').modal('show');
                    },
                    error:function(data){
                        console.log(data);
                    },
                });
            });
            $('#UpdateBtn').on('click',function(e) {
                e.preventDefault();
                var ID = $('#IDEdit').val();
                $.ajax({
                    type    : 'PATCH',
                    url     : '/guest/'+ID,
                    data    : $('#updateGuestForm').serializeArray(),
                    success:function(data){
                        $('#EditGuestlModal').modal('hide');
                        $('#updateGuestForm')[0].reset();
                        Swal.fire(
                          'Success!',
                          data,
                          'success'
                        );
                    },
                    error:function(data){
                        console.log(data);
                    }
                });
            });
        });
    </script>
@endsection