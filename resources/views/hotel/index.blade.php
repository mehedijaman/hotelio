@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12 m-auto">
        <div class="row">
            <div class="col-md-12 m-auto">

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
                        <h5><i class="icon fas fa-trash-can"></i>Delete All!</h5>
                        {{Session::get('destroyAll')}}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <!-- <a href="{{ asset('hotel/create') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking"> 
                                    <i class="fa-solid fa-circle-plus mr-2"></i>
                                    Add
                                </a> -->
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#NewHotelModal">New Hotel</button> -->
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

    <script>
        $(document).ready(function(){

            $.noConflict();
            var HotelList = $('#HotelList').DataTable({
                dom:'Btftip',
                serverSide:true,
                processing:true,
                responsive:true,
                buttons:['copyHtml5'],
                ajax:{
                    url:'/hotel',
                    type:'GET',
                },
                columns:[
                    {data:'Name'},
                    {data:'Title'},
                    {data:'Email'},
                    {data:'Address'},
                    {data:'Phone'},
                    {data:'RegNo'},
                    {data:'action',name:'action'},
                ],
            });
            

            $('#AddNewBtn').on('click',function(e){
                e.preventDefault();
                $('#NewHotelModal').modal('show');
            });

            $('#ResetFormBtn').on('click',function(e){
                e.preventDefault();

                $('#NewHotelForm')[0].reset();
            });

            $('#SubmitBtn').on('click',function(e){
                e.preventDefault();

                $.ajax({
                    type:'POST',
                    url:'/hotel',
                    data: $('#NewHotelForm').serialize(),
                    success:function(data){
                        $('#NewHotelForm')[0].reset();
                        $('#NewHotelModal').modal('hide');
                        Swal.fire(
                          'Success!',
                          data,
                          'success'
                        )

                        HotelList.draw(false);
                        
                    },
                    error:function(data){
                        console.log('Error while adding new hotel' + data);
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
                    if(result.isConfirmed){
                        $.ajax({
                            type    : "GET",
                            url     : '/hotel/delete/'+ID,
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
            $('.EditBtn').on('click',function(e){
                e.preventDefault();
                var ID = $(this).val();
                $.ajax({
                    type    : 'GET',
                    url     : '/hotel/'+ID,
                    success:function(data){
                        $('#UpdateHotelForm')[0].reset();
                        $('#IDEdit').val(data['id']);
                        $('#NameEdit').val(data['Name']);
                        $('#TitleEdit').val(data['Title']);
                        $('#EmailEdit').val(data['Email']);
                        $('#AddressEdit').val(data['Address']);
                        $('#PhoneEdit').val(data['Phone']);
                        $('#RegNoEdit').val(data['RegNo']);
                        $('#LogoEdit').val(data['Logo']);
                        $('#PhotoEdit').val(data['Photo']);
                        $('#EditHotelModal').modal('show');
                    },
                    error:function(data){
                        console.log(data);
                    },
                });
            });
            $('#UpdateBtn').on('click',function(e){
                e.preventDefault();
                var ID = $('#IDEdit').val();
                $.ajax({
                    type    : 'PATCH',
                    url     : '/hotel/'+ID,
                    data    : $('#UpdateHotelForm').serializeArray(),
                    success:function(data){
                        $('#EditHotelModal').modal('hide');
                        $('#UpdateHotelForm')[0].reset();
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