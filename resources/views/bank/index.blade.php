@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12 m-auto">
        <div class="row">
            <div class="col-md-12 m-auot">

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
                                <button type="button" class="btn bg-navy text-capitalize mr-3" id="AddNewBtn"><i class="fa-solid fa-circle-plus mr-2"></i>Add New</button>
                                Bank List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/bank/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/bank/delete"><i class="fa-solid fa-trash-can mr-2"></i>Delete All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-responsive table-borderless ListTable">
                            <thead>
                                <tr class="border-bottom">
                                    <th>Name</th>
                                    <th>Branch</th>
                                    <th>Account No</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
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
        
        <div class="modal fade show" id="NewBankModal" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New Bank</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('url' => '/bank','method' => 'POST', 'id' => 'newBankForm','class'=>'form-horizontal', 'files' => true)) }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="Name" class="form-label col-md-3">Name:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Name" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Branch" class="form-label col-md-3">Branch:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Branch" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="AccountNo" class="form-label col-md-3">Account No:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="AccountNo" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Address" class="form-label col-md-3">Address:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Address" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Phone" class="form-label col-md-3">Phone:</label>
                                    <div class="col-md-8">
                                        <input type="tel" name="Phone" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Email" class="form-label col-md-3">Email:</label>
                                    <div class="col-md-8">
                                        <input type="mail" name="Email" class="form-control"> 
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" name="submit" id="submitBtn" class="btn btn-success  float-right w-25 ml-2" value="submit">
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
        <div class="modal fade show" id="EditBankModal" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Bank</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('method' => 'PATCH','class'=>'form-horizontal', 'files' => true , 'id'=>'EditBankForm')) }}
                        <input type="hidden" name="ID" id="EditID">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Name" class="form-label col-md-3">Name:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Name" class="form-control" id="EditName"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Branch" class="form-label col-md-3">Branch:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Branch" class="form-control" id="EditBranch"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="AccountNo" class="form-label col-md-3">Account No:</label>
                                <div class="col-md-8">
                                    <input type="text" name="AccountNo" class="form-control" id="EditAccountNo"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Address" class="form-label col-md-3">Address:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Address" class="form-control" id="EditAddress"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Phone" class="form-label col-md-3">Phone:</label>
                                <div class="col-md-8">
                                    <input type="tel" name="Phone" class="form-control" id="EditPhone"> 
                                </div>
                            </div>  `
                            <div class="form-group row">
                                <label for="Email" class="form-label col-md-3">Email:</label>
                                <div class="col-md-8">
                                    <input type="mail" name="Email" class="form-control" id="EditEmail"> 
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

         <div class="modal fade show" id="ShowBankModal" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Show All Information on  Bank</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-responsive table-bordered table-stripped table-condensed ">
                            <thead>
                                <tr>
                                    <th class="bg-success " style="font-size: 25px;">Attribute</th>
                                    <th class="bg-success " style="font-size: 25px;">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td id="ViewName"></td>
                                </tr>
                                <tr>
                                    <td>Branch</td>
                                    <td id="ViewBranch"></td>
                                </tr>
                                <tr>
                                    <td>Account No</td>
                                    <td id="ViewAccountNo"></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td id="ViewAddress"></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td id="ViewPhone"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td id="ViewEmail"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/custom-js/bank.js') }}"></script>
  
@endsection