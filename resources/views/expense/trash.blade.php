@extends('layouts.app')
@section('content')
    <div class="container py-5 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-defult">
                        <div class="card-title">
                            <h2 class="card-title">
                              <a href="{{ asset('expense') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a> 
                                Expense Trash List
                            </h2>
                        </div>
                        <a class="btn btn-sm bg-navy float-right text-capitalize" href="/expense/emptyTrash"><i class="fa-solid fa-recycle mr-2"></i>Empty Trash</a>
                        <a class="btn btn-sm bg-maroon float-right text-capitalize mr-3" href="/expense/restoreAll"><i class="fa-solid fa-trash-can mr-2"></i>Restore All</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
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
                                    @foreach ( $ExpenseTrashed as $Expense)
                                        <tr class="">
                                            <td>{{ $Expense->id }}</td>
                                            <td>{{ $Expense->Amount }}</td>
                                            <td>{{ $Expense->Description }}</td>
                                            <td>{{ $Expense->Date }}</td>
                                        <td class="d-flex">
                                            <button type="button" class="RestoreBtn" value="{{$Expense->id}}" title="Restore"><i class="fa-solid fa-undo ml-2 text-success"></i></button>
                                        
                                            {{-- <a class="" href="/expense/{{ $Expense->id }}/parmanently/delete" data-bs-toggle="ParmanentDelete" data-bs-placement="bottom" title="Parmanent Delete" >
                                                <i class="fa-solid fa-trash-can ml-2 text-dange"></i>
                                            </a> --}}
                                            <button type="button" class="DeleteBtn" value="{{$Expense->id}}" title="Delete"><i class="fa-solid fa-trash-can ml-2 text-danger"></i></button>
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
                  text: "You won't be able to Permanent Delete this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if(result.isConfirmed){
                        $.ajax({
                            type    : 'GET',
                            url     : "/expense/parmanently/delete/"+ID,
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
            $('.RestoreBtn').on('click',function(e) {
                e.preventDefault();
                var ID = $(this).val();
                Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to retrieve this!",
                  icon: 'success',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, restore it!'
                }).then((result) => {
                    if(result.isConfirmed){
                        $.ajax({
                            type    : 'GET',
                            url     : "/income/restore/"+ID,
                            success:function(data){
                                Swal.fire(
                                    'Restore!',
                                    'Your file has been Restore.',
                                    'success'
                                );
                            },
                            error:function(data){
                                Swal.fire(
                                    'Error!',
                                    'Restore failed !',
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