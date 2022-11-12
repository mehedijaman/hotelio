@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12">
        <div class="row">
            <div class="col-md-12 mt-4">

                @if (Session::get('RestoreAll'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-check"></i>Restore All !</h5>
                    {{Session::get('RestoreAll')}}
                </div>        
                @endif

                @if (Session::get('Restore'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-check"></i>Restore!</h5>
                    {{Session::get('Restore')}}
                </div>        
                @endif

                @if (Session::get('Parmanentlly'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-ban"></i>Parmanentlly Delete!</h5>
                    {{Session::get('Parmanentlly')}}
                </div>        
                @endif

                @if (Session::get('emptyTrash'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-ban"></i>Epmty Trash!</h5>
                    {{Session::get('emptyTrash')}}
                </div>        
                @endif

                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                              <a href="{{ asset('bank') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a> 
                                Bank Trash List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/bank/emptyTrash"><i class="fa-solid fa-trash-can mr-2"></i>Empty Trash</a>
                        <a class="btn btn-sm float-right text-capitalize mr-3 bg-success" href="/bank/restoreAll"><i class="fa-solid fa-trash-can mr-2"></i>Restor All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr>
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
                                @foreach ($BankTrashed as $Bank)
                                    <tr>
                                        <td>{{ $Bank->Name }}</td>
                                        <td>{{ $Bank->Branch }}</td>
                                        <td>{{ $Bank->AccountNo }}</td>
                                        <td>{{ $Bank->Address }}</td>
                                        <td>{{ $Bank->Phone }}</td>
                                        <td>{{ $Bank->Email }}</td>
                                        <td class="d-flex">
                                            <a class="" href="/bank/{{ $Bank->id }}/restore" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Restore">
                                                <i class="fa-solid fa-undo ml-2 text-success"></i>
                                            </a>
                                            <button type="button" class="DeleteBtn" value="{{$Bank->id}}" title="Delete"><i class="fa-solid fa-trash-can ml-2 text-danger"></i></button>
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
    <Script>
        $(document).ready(function(){
            $('.DeleteBtn').on('click',function(e) {
                e.preventDefault();
                var ID = $(this).val();
                Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to Parmanent Delete this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if(result.isConfirmed){
                        $.ajax({
                            type    : 'GET',
                            url     : "/bank/parmanently/delete/"+ID,
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
                            }
                        });
                    }
                });
            });
        });
    </Script>
@endsection