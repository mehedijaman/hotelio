$(document).ready(function(){

    $.noConflict();
    var taxList = $('.ListTable').DataTable({
        dom:'CBrfltip',
        processing:true,
        serverSide:true,
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
                filename:'Tax_List',
            },
            {
                extend:'pdf',
                text:'<button class="btn bg-purple"><i class="fa-solid fa-file-pdf"></i></button>',
                titleAttr:'Export to Pdf',
                filename:'Tax_List',
            },
            {
                extend:'csv',
                text:'<button class="btn btn-info"><i class="fas fa-file-csv"></i></button>',
                titleAttr:'Export to PDF',
                filename:'Tax_List',
            },
            {
                text:'<button class="btn btn-dark"><i class="fa-solid fa-file"></i></button>',
                titleAttr:'Export To JSON',
                filename:'Tax_List',
                action:function(e,dt,button,config){
                    var data = dt.buttons.exportData();
                    $.fn.dataTable.fileSave(
                        new Blob([JSON.stringify(data)])
                    );
                },
            },

        ],
        ajax:{
            url:'/taxSetting',
            type:'GET'
        },
        columns:
        [
            {data:'Name'},
            {data:'Parcent'},
            {data:'Status',render:function(data,type,row){
                return data == 1?'<span class="text-success"><b>Active</></span>':'<span class="text-success"><b>Inactive</b></span>';
            }},
            {data:'action',name:'action'},
        ],
    });

    $('#ResetBtnForm').on('click',function(e){
        e.preventDefault();
        $('#NewTaxForm')[0].reset();
    });

    $('#SubmitBtn').on('click',function(e){
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "/taxSetting",
            data: $('#NewTaxForm').serialize(),
            success: function (data) {
                
                $('#NewTaxForm')[0].reset();
                $('#NewTaxModal').modal('hide');
                Swal.fire(
                    'Success !',
                    data,
                    'success'
                )

                taxList.draw(false);    
            },
            erorr:function(data){
                console.log('Error while adding new RoomTransfer' + data);

            }
        });
    });

    $('body').on('click','#DeleteBtn',function(e){
        e.preventDefault();
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
                url:'/taxSetting/delete/'+ID,
                success:function(data){
                    taxList.draw(false);
                   Swal.fire(
                      'Deleted!',
                      'Your file has been deleted.',
                      'success'
                    )
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
                url:'/taxSetting/delete',
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
        
        $.ajax({
            type:'GET',
            url:'/taxSetting/'+ID,
            success:function(data){
                $('#EditTaxForm')[0].reset();
                $('#IDEdit').val(data['id']);
                $('#NameEdit').val(data['Name']);
                $('#ParcentEdit').val(data['Parcent']);
                $('#StatusEdit').val(data['Status']);
                $('#EditTaxModal').modal('show');
            },
            error:function(data){
                console.log(data);
            },
        });
    });

    $('#UpdateBtn').on('click',function(e){
        e.preventDefault();
        var ID = $('#IDEdit').val();
        $.ajax({
            type:'PATCH',
            url:'/taxSetting/'+ID,
            data:$('#EditTaxForm').serializeArray(),
            success:function(data){
                $('#EditTaxModal').modal('hide');
                $('#EditTaxForm')[0].reset();
                taxList.draw(false);
                Swal.fire(
                    'success',
                    'Tax updated successfully',
                    'success'
                );
            },
            error:function(data){
                console.log(data);
            },
        });
    });
});