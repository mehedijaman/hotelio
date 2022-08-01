@extends('layouts.app')
@section('content')
<div class="container-fluid py-5 ">
    {{-- <section class="button mb-4">
            <a href="{{ asset('booking/create') }}" class="btn btn-info text-capitalize"> <i class="fa-solid fa-circle-plus mr-2"></i>Add</a>
    </section> --}}
    <div class="row">
        <div class="col-md-12 m-auto">
            @if (Session::get('Destroy'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icone fas fa-exclamation-triangle"></i> Deleted !</h5>
                    {{Session::get('Destroy')}}
                </div>
            @endif
            @if (Session::get('DestroyAll'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icone fas fa-exclamation-triangle"></i> Deleted !</h5>
                    {{Session::get('DestroyAll')}}
                </div>
            @endif
            
            <div class="card">
                <div class="card-header bg-defult">
                    <div class="card-title">
                        <h2 class="card-title">
                            {{-- <a href="{{ asset('user/create') }}" class="btn bg-navy text-capitalize mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Room">
                                <i class="fa-solid fa-circle-plus mr-2"></i>
                                Add
                            </a> --}}
                            User List
                        </h2>
                    </div>
                    <a class="btn btn-sm bg-navy float-right text-capitalize" href="/room/trash"><i class="fa-solid fa-recycle mr-2"></i>View Trash</a>
                    
                    <button class="btn btn-sm bg-maroon float-right text-capitalize mr-3" id="DeleteAllBtn">
                        <i class="fa-solid fa-trash-can mr-2"></i>
                        Delete All
                    </button>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-borderless" id="UserList">
                        <thead>
                            <tr class="border-bottom">
                                <th>Employee</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Photo</th>
                                <th>Status</th>
                                <th>LastLogin</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            {{-- @foreach ($Users as $User)
                                <tr class="border-bottom">
                                    <td>{{$User->Employee}}</td>
                                    <td>{{$User->name}}</td>
                                    <td>{{$User->email}}</td>
                                    <td>{{$User->Photo}}</td>
                                    <td>
                                        @if ($User->Status)
                                            <b class="text-success fs-6">Active</b> 
                                        @else
                                            <b class="text-danger fs-6">Deactive</b> 
                                        @endif
                                    </td>
                                    <td>{{$User->LastLogin}}</td>
                                    <td>{{$User->Role}}</td>
                                
                                
                                    <td class="d-flex">
                                        <a class="" href="/user/{{ $User->id }}/edit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                            <i class="fa-regular fa-pen-to-square mr-3 text-orange"></i></i>
                                        </a>

                                        <button class="DeleteBtn" value="{{ $User->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                            <i class="fa-regular fa-trash-can mr-3 text-danger"></i>
                                        </button>
                                        
                                    </td> 
                                </tr>
                            @endforeach --}}
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

            $.noConflict();
            var UserList = $('#UserList').DataTable({
                dom:'CBrfltip',
                serverSide:true,
                processing:true,
                colReorder:true,
                atateSave:true,
                responsive:true,
                buttons:[
                    {
                        extend:'copy',
                        text:'<button class="btn btn-primary"><i class="fa fa-copy"></i></button>',
                        titleAttr:'Copy Items',
                    },
                    {
                        extend:'excel',
                        text:'<button class="btn btn-success"><i class="fa fa-table"></i></button>',
                        titleAttr:'Export to Excel',
                        titlename:'User_List',
                    },
                    {
                        extend:'pdf',
                        text:'<button class="btn bg-purple"><i class="fa-solid fa-file-pdf"></i></button>',
                        titleAttr:'Export to PDF',
                        titlename:'User_List',
                    },
                    {
                        extend:'csv',
                        text:'<button class="btn btn-info"><i class="fas fa-file-csv"></i></button>',
                        titleAttr:'Export to PDF',
                        filename:'User_List',
                    },
                    {
                        text:'<button class="btn btn-dark"><i class="fa-solid fa-file"></i></button>',
                        titleAttr:'Export To JSON',
                        filename:'User_list',
                        action:function(e,dt,button,config){
                            var data = dt.button.exportData();
                            $.fn.dataTable.fileSave(
                                new Blob([JSON.stringify])
                            );
                        },
                    }
                ],
                ajax:{
                    url:'/user',
                    type:'GET'
                },
                columns:[
                    {data:'EmployeeID'},
                    {data:'name'},
                    {data:'email'},
                    {data:'Photo'},
                    {data:'Status'},
                    {data:'LastLogin'},
                    {data:'Role'},
                    {data:'action'}
                ]
            });

            $('.DeleteBtn').on('click',function(e){
                e.preventDefault();
                let ID = $(this).val();

                Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                  if (result.isConfirmed) {
                    $.ajax({
                        type:'GET',
                        url:'/user/delete/'+ID,
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

            $('#DeleteAllBtn').on('click',function(e){
                e.preventDefault();
                Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to DeleteAll this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, DeleteAll it!'
                }).then((result) => {
                  if (result.isConfirmed) {
                    $.ajax({
                        type:'GET',
                        url:'/user/delete',
                        success:function(data){
                           Swal.fire(
                              'DeleteAll!',
                              'Your file has been DeleteAll.',
                              'success'
                            );
                        },
                        error:function(data){
                            Swal.fire(
                              'Error!',
                              'DeleteAll failed !',
                              'error'
                            );
                            console.log(data);
                        },
                    });
                    
                 }
                });
            });
        })
    </script>
@endsection