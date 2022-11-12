@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12">
        <div class="row">
            <div class="col-md-12">

                @if (Session::get('Restore'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-check"></i>Restore!</h5>
                    {{Session::get('Restore')}}
                </div>        
                @endif

                @if (Session::get('RestoreAll'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-check"></i>Restore!</h5>
                    {{Session::get('RestoreAll')}}
                </div>        
                @endif

                @if (Session::get('Parmanentlly'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-ban"></i>Restore!</h5>
                    {{Session::get('Parmanentlly')}}
                </div>        
                @endif

                @if (Session::get('emptyTrash'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-ban"></i>Restore!</h5>
                    {{Session::get('emptyTrash')}}
                </div>        
                @endif

                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <a href="{{ asset('guest') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking"> 
                                    <i class="fa-solid fa-circle-arrow-left mr-2"></i>
                                </a>
                                    Trash Guest List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize" href="/guest/emptyTrash"><i class="fa-solid fa-trash-can mr-2"></i>Empty Trash</a>
                        <a class="btn btn-sm bg-navy float-right text-capitalize mr-3" href="/guest/restoreAll"><i class="fa-solid fa-trash-arrow-up mr-2 "></i>restore All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>NID NO</th>
                                    <th>Passport NO</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $GuestTrashed as $Guest)
                                    <tr>
                                        <td>{{ $Guest->id }}</td>
                                        <td>{{ $Guest->Name }}</td>
                                        <td>{{ $Guest->Email }}</td>
                                        <td>{{ $Guest->Address }}</td>
                                        <td>{{ $Guest->Phone }}</td>
                                        <td>{{ $Guest->NIDNo }}</td>
                                        <td>{{ $Guest->PassportNo }}</td>
                                        <td>{{ $Guest->Photo }}</td>
                                        <td>
                                          {{-- Restore --}}
                                          <a href="/guest/{{ $Guest->id }}/restore" data-bs-toggle="restore" data-bs-placement="bottom" title="Restore"><i class="fa-solid fa-undo  text-success"></i></a>
                                          
                                          <button type="button" class="DeleteBtn" value="{{$Guest->id}}" title="Delete"><i class="fa-solid fa-trash-can ml-2 text-danger"></i></button>
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
                            url     : "/guest/parmanently/delete/"+ID,
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