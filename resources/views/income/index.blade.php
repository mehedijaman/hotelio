@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                {{-- <a href="{{ asset('income/create') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking"> 
                                    <i class="fa-solid fa-circle-plus mr-2"></i>
                                    Add
                                </a> --}}
                                <button type="button" class="btn bg-navy text-capitalize mr-3" id="AddNewBtn"><i class="fa-solid fa-circle-plus mr-2"></i>New Add</button>
                                Income List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/income/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/income/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-responsive table-borderless col-md-10" id="IncomeList">
                            <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Amount</th>
                                    <th>Description</th>
                                    <th>Date</th>
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
        <div class="modal fade show" id="NewIncomelModal" role="dialog">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New Guest</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('url' => '/income','method' => 'POST','class'=>'form-horizontal', 'files' => true, 'id' => 'incomeForm')) }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="Type" class="form-label col-md-3">Incomes Category</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <select name="CategoryID" id="" class="form-select">
                                                <option value="">Select Category</option>
                                                @foreach($IncomeCategoris as $Incomes)
                                                <option value="{{ $Incomes->id }}"> {{ $Incomes->Name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Amount" class="form-label col-md-3">Amount:</label>
                                    <div class="col-md-8">
                                        <input type="number" name="Amount" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Description" class="form-label col-md-3">Description:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Description" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Date" class="form-label col-md-3">Date:</label>
                                    <div class="col-md-8">
                                        <input type="datetime-local" name="Date" class="form-control"> 
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
        <div class="modal fade show" id="EditIncomelModal" role="dialog">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New Guest</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('method' => 'PATCH','class'=>'form-horizontal','id'=>'updateForm', 'files' => true)) }}
                        <input type="hidden" name="ID" id="EditID">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Type" class="form-label col-md-3">Incomes Category</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <select name="CategoryID" id="EditCategoryID" class="form-select">
                                            <option value="">Select Category</option>
                                            @foreach($IncomeCategoris as $IncomeCatagory)
                                            @if ($Incomes->CategoryID == $IncomeCatagory->id)
                                                <option value="{{ $IncomeCatagory->id }}" selected> {{ $IncomeCatagory->Name }}    
                                            @else
                                                <option value="{{ $IncomeCatagory->id }}"> {{ $IncomeCatagory->Name }} 
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Amount" class="form-label col-md-3">Amount:</label>
                                <div class="col-md-8">
                                    <input type="number" name="Amount" class="form-control" id="EditAmount"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Description" class="form-label col-md-3">Description:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Description" class="form-control" id="DescriptionEdit"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Date" class="form-label col-md-3">Date:</label>
                                <div class="col-md-8">
                                    <input type="datetime-local" name="Date" class="form-control" id="DateEdit"> 
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="submit" id="updateBtn" class="btn bg-success float-right w-25 text-capitalize">Update</button>
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
            var IncomeList =$('#IncomeList').DataTable({
                processing  : true,
                serverSide  : true,
                colReorder  : true,
                stateSave   : true,
                responsive  : true,
                buttons : ['copy','excel','pdf'],
                ajax: {
                    type    : 'GET',
                    url     : '/income',
                } ,
                columns : [
                    {data : "CategoryName"},
                    {data : "Amount"},
                    {data : "Description"},
                    {data : "Date"},
                    {data : "action" , name : 'action'},
                ],
            });

            $('#AddNewBtn').on('click',function(e){
                e.preventDefault();
                $('#NewIncomelModal').modal('show');
            });
            $('#formResetBtn').on('click',function(e){
                e.preventDefault();
                $('#incomeForm')[0].reset();
            });
            $('#submitBtn').on('click',function(e){
                e.preventDefault();
                $.ajax({
                    type    : 'POST',
                    url     : '/income',
                    data    : $('#incomeForm').serialize(),success:function(data){
                        $('#incomeForm')[0].reset();
                        $('#NewIncomelModal').modal('hide');
                        Swal.fire(
                          'Success!',
                          data,
                          'success'
                        );
                    },
                    error:function(date){
                        console.log('Error while added new Expense Item'+data);
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
                            url     : "/income/delete/"+ID,
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
                    type    :'GET',
                    url     : '/income/'+ID,
                    data    : $('#updateForm').serialize(),
                    success:function(data){
                        $('#updateForm')[0].reset();
                        $('#EditID').val(data['id']);
                        $('#EditCategoryID').val(data['CategoryID']);
                        $('#EditAmount').val(data['Amount']);
                        $('#DescriptionEdit').val(data['Description']);
                        $('#DateEdit').val(data['Date']);
                        $('#EditIncomelModal').modal('show');
                    },
                    error:function(data){
                        console.log(data);
                    },
                });   
            });
            
            $('#updateBtn').on('click',function(e){
                e.preventDefault();
                var ID =$('#EditID').val();
                $.ajax({
                    type    :"PATCH",
                    url     : "/income/"+ID,
                    data    : $('#updateForm').serializeArray(),
                    success:function(data){
                        $('#EditIncomelModal').modal('hide');
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