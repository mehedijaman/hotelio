@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-10 m-auto">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                {{-- <a href="{{ asset('income/category/create') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking"> 
                                    <i class="fa-solid fa-circle-plus mr-2"></i>
                                    Add
                                </a> --}}
                                <button type="button" class="btn bg-navy text-capitalize mr-3" id="AddNewBtn"><i class="fa-solid fa-circle-plus mr-2"></i>Add New</button>
                                Expense Category List
                            </h2>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr class="border-bottom">
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                          
                            <tbody>
                                @foreach ($IncomeCategoris as $Category)
                                    <tr class="border-bottom">
                                        <td>{{$Category->Name}}</td>
                                        <td class="d-flex">
                                           <a href="{{URL::to('income/category/'.$Category->id)}}" class="mr-3 text-purple" data-bs-toggle="View" data-bs-placement="bottom" title="View">
                                                <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye"><path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle></svg>
                                           </a>
                                            <a class="" href="/income/category/{{ $Category->id }}/edit" data-bs-toggle="Edit" data-bs-placement="bottom" title="Edit">
                                                <i class="fa-regular fa-pen-to-square mr-3 text-orange"></i></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
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
                    },
                    error:function(data){
                        console.log('Eerror while added category !' + data);
                    }
                });
            });
        });
    </script>
@endsection