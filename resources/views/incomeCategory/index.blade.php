@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-10 m-auto">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                {{-- <a href="{{ asset('income/category/create') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking"> 
                                    <i class="fa-solid fa-circle-plus mr-2"></i>
                                    Add
                                </a> --}}
                                <button type="button" class="btn bg-navy text-capitalize mr-3" id="AddNewBtn"><i class="fa-solid fa-circle-plus mr-2"></i>Add New</button>
                                Income Category List
                            </h2>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-responsive table-borderless " id="IncomeCategoryList">
                            <thead>
                                <tr class="border-bottom">
                                    <th>Name</th>
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
        <div class="modal fade show" id="NewCategorylModal" role="dialog">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New Guest</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('url' => '/income/category','method' => 'POST','class'=>'form-horizontal', 'files' => true , 'id' => 'categoryForm')) }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="Name" class="form-label col-md-3">Name:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Name" class="form-control"> 
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" name="submit" id="submitBtn" class="btn bg-navy float-right w-25 text-capitalize">
                                    <button type="button" id="formResetBtn" class="btn btn-warning ">Reset</button>
                                </div>
                            </div>
                        {{ Form::close()}}   
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade show" id="EditCategorylModal" role="dialog">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Guest</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('method' => 'PATCH','class'=>'form-horizontal','id'=>'updateCategoryForm', 'files' => true)) }}
                        <input type="hidden" name="ID" id="EditID">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Name" class="form-label col-md-3">Name:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Name" class="form-control" id="EditName"> 
                                </div>
                            </div>
                        <div class="card-footer">
                            <button type="button" name="submit" id="UpdateBtn" class="btn btn-info float-right w-25 mx-md-3 px-md-2">Update</button>
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
            var IncomeCategory = $('#IncomeCategoryList').DataTable({
                processing: true,
                serversite: true,
                colReorder: true,
                stateSave : true,
                reponsive : true,
                buttone:['copy','excel','pdf'],
                ajax:{
                    type : "GET",
                    url  : "/income/category",
                },
                columns:[
                    {data : 'Name'},
                    {data : 'action', name : 'action'},
                ],
            });

            $('#AddNewBtn').on('click',function(e){
                e.preventDefault();
                $('#NewCategorylModal').modal('show');
            });
            $('#formResetBtn').on('click',function(e){
                e.preventDefault();
                $('#categoryForm')[0].reset();
            });
            $('#submitBtn').on('click',function(e){
                e.preventDefault();
                $.ajax({
                    type    : 'POST',
                    url     : '/income/category',
                    data    : $('#categoryForm').serializeArray(),success:function(data){
                        $('#categoryForm')[0].reset();
                        $('#NewCategorylModal').modal('hide');
                        Swal.fire(
                          'Success!',
                          data,
                          'success'
                        );
                        IncomeCategory.draw(false);
                    },
                    error:function(data){
                        console.log('Eerror while added category !' + data);
                    }
                });
            });
            $('.EditBtn').on('click',function(e){
                e.preventDefault();
                var ID = $(this).val();
                $.ajax({
                    type    : 'GET',
                    url     : '/income/category/'+ID,
                    data    : $('#updateCategoryForm').serializeArray(),
                    success:function(data){
                        // console.log(data['Name']);
                        $('#updateCategoryForm')[0].reset();
                        $('#EditID').val(data['id']);
                        $('#EditName').val(data['Name']);
                        $('#EditCategorylModal').modal('show');
                    },
                    error:function(data){
                        console.log(data);
                    }
                });
            });
            $('#UpdateBtn').on('click',function(e){
                e.preventDefault();
                var ID = $('#EditID').val();
                $.ajax({
                    type    : 'PATCH',
                    url     : '/income/category/'+ID,
                    data    : $('#updateCategoryForm').serializeArray(),
                    success:function(data){
                        $('#EditCategorylModal').modal('hide');
                        $('#updateCategoryForm')[0].reset();
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