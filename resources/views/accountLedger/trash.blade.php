@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">

            @if (Session::get('Restore_All'))
            <div class="alert alert-teal bg-teal alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h5><i class="fa-solid fa-arrow-rotate-left"></i>Restore All!</h5>
                {{Session::get('Restore_All')}}
            </div>
            @endif
            @if (Session::get('Restore'))
            <div class="alert alert-teal bg-teal alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h5><i class="fa-solid fa-arrow-rotate-left"></i>Restore!</h5>
                {{Session::get('Restore')}}
            </div>
            @endif
            @if (Session::get('Parmanent_Delete'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h5> <i class="icon fas fa-ban"></i>
                    Parmanent Delete!
                </h5>
                {{Session::get('Parmanent_Delete')}}
            </div>
            @endif
            @if (Session::get('Parmanent_All_Delete'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h5> <i class="icon fas fa-ban"></i>
                    Parmanent All Delete!
                </h5>
                {{Session::get('Parmanent_All_Delete')}}
            </div>
            @endif
            <div class="card">

                <div class="card-header bg-defult">
                    <div class="card-title">
                        <h2 class="card-title">
                            <a href="{{ asset('acount/ledger') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking">
                                <i class="fa-solid fa-circle-arrow-left"></i>
                            </a>
                            Trash Account Ledger
                        </h2>
                    </div>
                    <a href="/acount/ledger/emptytrash" class="btn btn-sm bg-maroon float-right text-capitalize"><i class="fa-solid fa-trash-can mr-2"></i>Empty Trash</a>
                    <a href="/acount/ledger/restoreall" class="btn btn-sm bg-teal float-right text-capitalize mr-3"><i class="fa-solid fa-trash-arrow-up mr-2"></i>Restore All</a>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Debit</th>
                                <th>Credit</th>
                                <th>Date</th>
                                <th>Method</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($TrashAccounts as $TrashAccount)
                            <tr>
                                <td>{{$TrashAccount->Debit}}</td>
                                <td>{{$TrashAccount->Credit}}</td>
                                <td>{{$TrashAccount->Date}}</td>
                                <td>{{$TrashAccount->Method}}</td>
                                <td>{{$TrashAccount->Description}}</td>
                                <td class="d-flex">
                                    <a href="/acount/ledger/{{$TrashAccount->id}}" class="mr-3 text-purple" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View">
                                        <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye">
                                            <path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>

                                    <button value="{{$TrashAccount->id}}" class="RestoreBtn"  title="Restore">
                                        <i class="fa-solid fa-trash-arrow-up ml-2 text-success"> </i>
                                    </button>
                                    <button type="button" value="{{$TrashAccount->id}} "  class="DeleteBtn mx-2" title="Delete">
                                        <i class="fa-solid fa-trash-can ml-2 text-danger"></i>
                                    </button>

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
</div>
<script>
    $(document).ready(function(){
        $('.DeleteBtn').on('click',function(e){
            e.preventDefault();
            var ID = $(this).val();
            // console.log(ID);
            Swal.fire({
                icon: 'error',
                title: 'Are you sure ?',
                text: 'You wont be able to revert this!',
                footer: '<a href="">Why do I have this issue?</a>'
            }).then((result) => {
                if(result.isConfirmed){
                    $.ajax({
                        type:'GET',
                        url:'/acount/ledger/delete/parmanently/'+ ID,
                        success: function(data){
                            Swal.fire(
                                    'Parmanent Deleted!',
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
                        }
                    });
                }
            });

        });
        $('.RestoreBtn').on('click', function(e){
            e.preventDefault();
            var ID = $(this).val();
            // console.log(ID);
            Swal.fire({
                icon: 'question',
                title: 'Are you sure ?',
                text: 'You wont be able to revert this!',
                footer: '<a href="">Why do I have this issue?</a>'
            }).then((result) => {
                if(result.isConfirmed){
                    $.ajax({
                        type:'GET',
                        url:'/acount/ledger/restore/'+ ID,
                        success:function(data){
                            Swal.fire(
                                'Restore',
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
                        }

                    });
                }
            });

        });
        
    });
</script>
@endsection

