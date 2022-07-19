@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12">
        <div class="row">
            <div class="col-md-12">
                
                @if (Session::get('restore'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-check"></i>Restore!</h5>
                    {{Session::get('restore')}}
                </div>        
                @endif

                @if (Session::get('restoreAll'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-check"></i>Restore All!</h5>
                    {{Session::get('restoreAll')}}
                </div>        
                @endif

                @if (Session::get('emptyTrash'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-ban"></i>Empty Trash!</h5>
                    {{Session::get('emptyTrash')}}
                </div>        
                @endif

                @if (Session::get('Parmanentlly'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-ban"></i>Parmanentlly Delete!</h5>
                    {{Session::get('Parmanentlly')}}
                </div>        
                @endif

                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                                <a href="{{ asset('employee') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Booking"> 
                                    <i class="fa-solid fa-circle-arrow-left fs-5 text-light"></i>
                                </a>
                                Employee Trash List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-danger float-right text-capitalize" href="/employee/emptyTrash"><i class="fa-solid fa-recycle mr-2"></i>Empty Trash</a>
                        <a class="btn btn-sm bg-success float-right text-capitalize mr-3" href="/employee/restoreAll"><i class="fa-solid fa-trash-can mr-2"></i>Restore All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-responsive ">
                            <thead>
                                <tr>
                                    {{-- <th>id</th> --}}
                                    <th>Hote Name</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Date Of Join</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ( $EmployeesTrashed as $Employee )
                                    <tr class="">
                                          {{-- <td>{{ $Employee->id }}</td> --}}
                                          <td>{{ $Employee->Hotel }}</td>
                                          <td>{{ $Employee->Name }}</td>
                                          <td>{{ $Employee->Designation }}</td>
                                          <td>{{ $Employee->Phone }}</td>
                                          <td>{{ $Employee->Email }}</td>
                                          <td>{{ $Employee->Address }}</td>
                                          <td>{{ $Employee->DateOfJoin }}</td>
                                          <td>{{ $Employee->Status }}</td>
                                          <td class="d-flex">
                                                <a class="" href="/employee/{{ $Employee->id }}/restore" data-bs-toggle="restore" data-bs-placement="bottom" title="Edit">
                                                    <i class="fa-solid fa-undo text-success"></i></i>
                                                </a>
                                                <button type="button" class="DeleteBtn" value="{{$Employee->id}}" title="Delete"><i class="fa-solid fa-trash-can ml-2 text-danger"></i></button>
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
                            url     : "/employee/parmanently/delete/"+ID,
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