$(document).ready(function(){

    $.noConflict();
    var table =$('.ListTable').DataTable({
        dom:'CBrfiltip',
        processing:true,
        serverSide:true,
        colReorder:true,
        stateSave:true,
        // colvis:{buttonText:'Change Columns'},
        buttons:[
            {
                extend : 'copy',
                text : "<button class = 'btn btn-success'><i class='fa fa-copy'></i></button>",
                titleAttr : 'Copy Items',
            },
            {
                extend : 'excel',
                text : "<button class = 'btn btn-primary'><i class ='fa fa-file-excel'></i></button>",
                titleAttr : 'Export to Excel',
                filename: "Bank_List",

            },
            {
                extend : 'pdf',
                text : "<button class='btn btn-success'><i class = 'fa fa-file-pdf'></i></button>",
                titleAttr : 'Export to PDF',
                filename : 'Bank_list',
            },
            {
                extend : 'csv',
                text : '<button class = "btn btn-primary"><i class="fa-solid fa-file-csv"></i></button>',
                titleAttr : "Export to CSV",
                filename : 'Bank_list',
            },
            {
                text : "<button class = 'btn btn-success'><i class = 'fa fa-file'></i></button>",
                titleAttr : "Export to JSON",
                filename : 'Bank_list',
                action:function(e,dt,button,config){
                    var data = dt.buttons.exportData();
                    $.fn.dataTable.fileSave(
                        new Blob([JSON.stringify(data)])
                    );
                },
            },
        ],
        responsive:true,
        ajax:{
            url:'/bank',
            type:'GET'
        },
        columns:[
            {data:'Name'},
            {data:'Branch'},
            {data:'AccountNo'},
            {data:'Address'},
            {data:'Phone'},
            {data:'Email'},
            {data:'action',name:'action'},
        ],
    });

    $('#AddNewBtn').on('click',function(e){
        e.preventDefault();
        jQuery.noConflict();
        $('#NewBankModal').modal('show');
    });

    $('#formResetBtn').on('click',function(e){
        e.preventDefault();

        $('#newBankForm')[0].reset();
    });

    $('#submitBtn').on('click',function(e){
        e.preventDefault();
        
        $.ajax({
            type:'POST',
            url : '/bank',
            data: $('#newBankForm').serializeArray(),
            success:function(data){
                table.draw(false);
                $('#newBankForm')[0].reset();
                $('#NewBankModal').modal('hide');
                Swal.fire(
                  'Success!',
                  data,
                  'success'
                );
            },
            error:function(data){
                console.log('Error while adding new Bank'+data);
            },
        });
    });
    
    $('body').on('click','#DeleteBtn',function(e) {
        e.preventDefault();
        var ID = $(this).data('id');
        // console.log(ID);
        Swal.fire({
            title :"Are you sure ?",
            text  : "You won't be able to revert this !",
            icon : 'warning',
            showCancelButton : true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor : '#d33',
            confirmButtonText : 'Yes , delete it !'
        }).then((result) => {
            if(result.isConfirmed){
                $.ajax({
                    type : 'GET',
                    url  : '/bank/delete/'+ID,
                    success:function(data){
                        table.draw(false);
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

    
    $('#UpdateBtn').on('click',function(e) {
        e.preventDefault();
        var ID = $('#EditID').val();
        // console.log($('#EditBankForm').serializeArray());
        $.ajax({
            type    : 'PATCH',
            url     : 'bank/'+ID,
            data    : $('#EditBankForm').serializeArray(),
            success:function(data){
                $('#EditBankModal').modal('hide');
                $('#EditBankForm')[0].reset();
                table.draw(false);
                Swal.fire(
                  'Success!',
                  data,
                  'success'
                );
            },
            error:function(data){
                console.log(data);
            },
        });
    });

    $('body').on('click','#EditBtn',function(e){
        var ID = $(this).data('id');

        $.ajax({
            type:'GET',
            url:'/bank/'+ID,
            success:function(data){
                $('#EditBankForm')[0].reset();

                $('#EditID').val(data['id']);
                $('#EditName').val(data['Name']);
                $('#EditBranch').val(data['Branch']);
                $('#EditAccountNo').val(data['AccountNo']);
                $('#EditAddress').val(data['Address']);
                $('#EditPhone').val(data['Phone']);
                $('#EditEmail').val(data['Email']);
                
                $('#EditBanklModal').modal('show');
            },
            error:function(data){
                console.log(data);
            }
        });
    });

    $('body').on('click','#ViewBtn',function(e){
        e.preventDefault();

        var ID = $(this).data('id');

        $.ajax({
            type:'GET',
            url:'/bank/'+ID,
            success:function(data){
                $('#ViewName').text(data['Name']);
                $('#ViewBranch').text(data['Branch']);
                $('#ViewAccountNo').text(data['AccountNo']);
                $('#ViewAddress').text(data['Address']);
                $('#ViewPhone').text(data['Phone']);
                $('#ViewEmail').text(data['Email']);

                $('#ShowBankModal').modal('show');
            },
            error:function(data){
                console.log(data);
            },
        });
    });
});