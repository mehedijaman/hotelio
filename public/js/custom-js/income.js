$(document).ready(function(){
    $.noConflict();
    var IncomeList =$('#IncomeList').DataTable({
        dom         : 'Btlftip',
        processing  : true,
        serverSide  : true,
        colReorder  : true,
        stateSave   : true,
        responsive  : true,
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
                filename: "Employee_List",

            },
            {
                extend : 'pdf',
                text : "<button class='btn btn-success'><i class = 'fa fa-file-pdf'></i></button>",
                titleAttr : 'Export to PDF',
                filename : 'Employee_list',
            },
            {
                extend : 'csv',
                text : '<button class = "btn btn-primary"><i class="fa-solid fa-file-csv"></i></button>',
                titleAttr : "Export to CSV",
                filename : 'Employee_list',
            },
            {
                text : "<button class = 'btn btn-success'><i class = 'fa fa-file'></i></button>",
                titleAttr : "Export to JSON",
                filename : 'Employee_list',
                action:function(e,dt,button,config){
                    var data = dt.buttons.exportData();
                    $.fn.dataTable.fileSave(
                        new Blob([JSON.stringify(data)])
                    );
                },
            },
        ],
        ajax: {
            type    : 'GET',
            url     : '/income',
        } ,
        columns : [
            {data : "CategoryName"},
            {data : "Amount"},
            {data : "Description"},
            {data : "Date"},
            {data : "action" , name : 'action'},
        ],
    });

    $('#AddNewBtn').on('click',function(e){
        e.preventDefault();
        $('#NewIncomeModal').modal('show');
    });
    $('#formResetBtn').on('click',function(e){
        e.preventDefault();
        $('#incomeForm')[0].reset();
    });
    $('#submitBtn').on('click',function(e){
        e.preventDefault();
        $.ajax({
            type    : 'POST',
            url     : '/income',
            data    : $('#incomeForm').serialize(),success:function(data){
                $('#incomeForm')[0].reset();
                $('#NewIncomeModal').modal('hide');
                Swal.fire(
                  'Success!',
                  data,
                  'success'
                );
                IncomeList.draw(false);
            },
            error:function(date){
                console.log('Error while added new Expense Item'+data);
            },
        });
    });

    $('body').on('click','#DeleteBtn',function(e) {
        e.preventDefault();
        var ID = $(this).data('id');
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if(result.isConfirmed){
                $.ajax({
                    type    : "GET",
                    url     : "/income/delete/"+ID,
                    success:function(data){
                        IncomeList.draw(false);
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

    $('body').on('click','#EditBtn',function(e){
        e.preventDefault();
        var ID = $(this).data('id');
        $.ajax({
            type    :'GET',
            url     : '/income/'+ID,
            data    : $('#updateForm').serialize(),
            success:function(data){
                $('#updateForm')[0].reset();
                $('#EditID').val(data['id']);
                $('#EditCategoryID').val(data['CategoryID']);
                $('#EditAmount').val(data['Amount']);
                $('#DescriptionEdit').val(data['Description']);
                $('#DateEdit').val(data['Date']);
                $('#EditIncomelModal').modal('show');
            },
            error:function(data){
                console.log(data);
            },
        });   
    });
    
    $('#updateBtn').on('click',function(e){
        e.preventDefault();
        var ID =$('#EditID').val();
        $.ajax({
            type    :"PATCH",
            url     : "/income/"+ID,
            data    : $('#updateForm').serializeArray(),
            success:function(data){
                $('#EditIncomeModal').modal('hide');
                $('#updateForm')[0].reset();
                Swal.fire(
                  'Success!',
                  data,
                  'success'
                );
                IncomeList.draw(false);
            },
            error:function(data){
                console.log(data);
            },
        });
    });

    $('body').on('click','#ViewBtn', function(e){
        e.preventDefault();
        var ID = $(this).data('id');

        $.ajax({
            type : 'GET',
            url  : '/income/'+ID,
            success:function(data){
                $('#ViewCategoryName').text(data['CategoryName']);
                $('#ViewAmount').text(data['Amount']);
                $('#ViewDescription').text(data['Description']);
                $('#ViewDate').text(data['Date']);

                $('#ShowIncomeModal').modal('show');
            },
            error:function(data){
                console.log(data);
            },
        });
    });
});