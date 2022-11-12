$(document).ready(function(){
    $.noConflict();
    var RoomTansferList = $('#RoomTansferList').DataTable({
        dom:'CBrfltip',
        serverSide:true,
        processing:true,
        colReorder:true,
        stateSave:true,
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
                filename:'RoomTransfer_List',
            },
            {
                extend:'pdf',
                text:'<button class="btn bg-purple"><i class="fa-solid fa-file-pdf"></i></button>',
                titleAttr:'Export to Pdf',
                filename:'RoomTransfer_List',
            },
            {
                extend:'csv',
                text:'<button class="btn btn-info"><i class="fas fa-file-csv"></i></button>',
                titleAttr:'Export to PDF',
                filename:'RoomTransfer_List',
            },
            {
                text:'<button class="btn btn-dark"><i class="fa-solid fa-file"></i></button>',
                titleAttr:'Export To JSON',
                filename:'RoomTransfer_List',
                action:function(e,dt,button,config){
                    var data = dt.buttons.exportData(data);
                    $.fn.dataTable.fileSave(
                        new Blob([JSON.stringify()])
                    );
                },
            },

        ],
        ajax:{
            url:'/roomTransfer',
            type:'GET',
        },
        columns:
        [
            {data:'Guest'},
            {data:'FromRoomID'},
            {data:'Room'},
            {data:'Date'},
            {data:'action',name:'action'},
            
        ]
    });

    $('#ResetBtnForm').on('click',function(e){
        e.preventDefault();
        $('#NewRoomTransferForm')[0].reset();
    });

    $('#SubmitBtn').on('click',function(e){
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "/roomTransfer",
            data: $('#NewRoomTransferForm').serializeArray(),
            success: function (data) {
                $('#NewRoomTransferForm')[0].reset();
                $('#NewRoomTransferModal').modal('hide');
                Swal.fire(
                    'Success !',
                    data,
                    'success'
                )
                RoomTansferList.draw(false);
            },
            error:function (data){  
                console.log('Error while adding new RoomTransfer' + data);
            }
        });
    });

    $('body').on('click','#DeleteBtn',function(e){
        e.preventDefault();
        // console.log($(this).val());
        var ID = $(this).data('id');
        console.log(ID);
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
                url:'/roomTransfer/delete/'+ID,
                success:function(data){
                   RoomTansferList.draw(false); 
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
                },
            });
         }
        });
    });

    $('#DeleteAll').on('click',function(e){
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
                url:'/roomTransfer/delete',
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

    $('body').on('click','#EditBtn',function(e){
        e.preventDefault();
        var ID = $(this).data('id');
        console.log(ID);
        $.ajax({
            type: 'GET',
            url: "/roomTransfer/"+ID,
            success: function(data) {
                $('#EditRoomTransferForm')[0].reset();
                $('#IDEdit').val(data['id']);
                $('#EditGuest').val(data['GuestID']);
                $('#EditFormRoom').val(data['FromRoomID']);
                $('#EditDate').val(data['Date']);
                $('#EditRoomTransferModal').modal('show');
            },
            error: function(data) {
                console.log(data);
            }
        });
    });

    $('#UpdateBtn').on('click',function(e){
        e.preventDefault();
        var ID = $('#IDEdit').val();
        // console.log(ID);
        $.ajax({
            type: 'PATCH',
            url: '/roomTransfer/'+ID,
            data: $('#EditRoomTransferForm').serializeArray(),
            success: function (data) {
                $('#EditRoomTransferModal').modal('hide');
                $('#EditRoomTransferForm')[0].reset();
                RoomTansferList.draw(false);
                Swal.fire(
                    'success',
                    'Tax updated successfully',
                    'success'
                );
            },
            error:function(data)
            {
                console.log(data);
            }
        });
        
    });
});