@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-8 m-auto">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div .class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <button type="button" class="btn bg-navy text-capitalize mr-3" id="AddNewBtn"><i class="fa-solid fa-circle-plus mr-2"></i>Add New</button>
                                Expense List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/expense/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/expense/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-responsive table-borderless " id="ExpenseList">
                            <thead>
                                <tr class="border-bottom">
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
        <div class="modal fade show" id="NewExpenseModal" role="dialog">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New Guest</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('url' => '/expense','method' => 'POST','class'=>'form-horizontal', 'files' => true ,'id' => 'expenseForm')) }}
                            <input type="hidden" name="ID" id="EditId">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="Type" class="form-label col-md-3">Expense Category</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <select name="CategoryID" id="EditCategory" class="form-select">
                                                <option value="">Select Category</option>
                                                @foreach($ExpenseCategoris as $Category)
                                                <option value="{{ $Category->id }}"> {{ $Category->Name }} </option>
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
                                        <input type="text" name="Description" class="form-control" id="EditDescription"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Date" class="form-label col-md-3">Date:</label>
                                    <div class="col-md-8">
                                        <input type="datetime-local" name="Date" class="form-control" id="EditDate"> 
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
        <div class="modal fade show" id="EditExpenseModal" role="dialog">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Expense</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('method' => 'PATCH','class'=>'form-horizontal', 'files' => true ,'id' => 'updateExpenseForm')) }}
                            <input type="hidden" name="ID" id="EditId">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="Type" class="form-label col-md-3">Expense Category</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <select name="CategoryID" id="EditCategory" class="form-select">
                                                <option value="">Select Category</option>
                                                @foreach($ExpenseCategoris as $Expense)
                                                @if ($Expense->CategoryID == $Expense->id )
                                                    <option value="{{ $Expense->id }}" selected> {{ $Expense->Name }} </option>
                                                @else
                                                    <option value="{{ $Expense->id }}"> {{ $Expense->Name }} </option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Amount" class="form-label col-md-3">Amount:</label>
                                    <div class="col-md-8">
                                        <input type="number" name="Amount" class="form-control" id="AmountEdit"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Description" class="form-label col-md-3">Description:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Description" class="form-control" value="EditDescription"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Date" class="form-label col-md-3">Date:</label>
                                    <div class="col-md-8">
                                        <input type="date" name="Date" class="form-control" value="EditDate"> 
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="button" name="submit" id="updateBtn" class="btn bg-success float-right w-25 text-capitalize" value="Update">Update</button>
                                </div>
                            </div>
                    {{ Form::close()}}  
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade show" id="ShowExpenseModal" role="dialog">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New Guest</h4>
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
                                <td>Category Name</td>
                                <td id="ViewCategoryName"></td>
                            </tr>
                            <tr>
                                <td>Amount</td>
                                <td id="ViewAmount"></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td id="ViewDescription"></td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td id="ViewDate"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/custom-js/expense.js')}}"></script>
@endsection