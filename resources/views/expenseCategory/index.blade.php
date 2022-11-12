@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-10 m-auto">
        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <button type="button" class="btn bg-navy text-capitalize mr-3" id="AddNewBtn"><i class="fa-solid fa-circle-plus mr-2"></i>Add New</button>
                                Expense Category List
                            </h2>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-responsive table-borderless " id="ExpenseCategoryList">

                            <thead>
                                <tr class="border-bottom">
                                    <th class="pr-5">Name</th>
                                    <th class="pl-5">Action</th>
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
        <div class="modal fade show" id="NewCategoryModal" role="dialog">
            <div class="modal-dialog modal-xl m-auto mt-md-5">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New Guest</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('url' => '/expense/category','method' => 'POST','class'=>'form-horizontal', 'files' => true , 'id' => 'categoryForm')) }}
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
        <div class="modal fade  show " id="EditCategoryModal" role="dialog">
            <div class="modal-dialog modal-lg m-auto mt-md-5">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Category Update</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('method' => 'PATCH','class'=>'form-horizontal','id' =>'updateForm', 'files' => true)) }}
                        <input type="hidden" name="ID" id="EditId">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Name" class="form-label col-md-3">Name:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Name" class="form-control" id="EditName"> 
                                </div>
                            </div>
                        </div>    
                        <div class="card-footer">
                            <button type="button" name="submit" id="updateBtn" class="btn btn-info float-right w-25 mx-md-3 px-md-2">Update</button>
                        </div>
                    {{ Form::close()}}  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src='/js/custom-js/expenseCategory.js'></script>
@endsection