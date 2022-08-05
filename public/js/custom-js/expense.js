$(document).ready(function(){
    $.noConflict();
    var ExpenseList = $('#ExpenseList').DataTable({
        processing : true ,
        serverSide : true ,
        colReorder : true ,
        stateSave  : true ,
        responsive : true ,
        dom         : 'Btlftip',
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
                filename: "Expense_List",

            },
            {
                extend : 'pdf',
                text : "<button class='btn btn-success'><i class = 'fa fa-file-pdf'></i></button>",
                titleAttr : 'Export to PDF',
                filename : 'Expense_list',
            },
            {
                extend : 'csv',
                text : '<button class = "btn btn-primary"><i class="fa-solid fa-file-csv"></i></button>',
                titleAttr : "Export to CSV",
                filename : 'Expense_list',
            },
            {
                text : "<button class = 'btn btn-success'><i class = 'fa fa-file'></i></button>",
                titleAttr : "Export to JSON",
                filename : 'Expense_list',
                action:function(e,dt,button,config){
                    var data = dt.buttons.exportData();
                    $.fn.dataTable.fileSave(
                        new Blob([JSON.stringify(data)])
                    );
                },
            },
        ],

        ajax:{
            type : 'GET',
            url  : '/expense',
        },
        columns : [
            {data : 'CategoryName'},
            {data : 'Amount'},
            {data : 'Description'},
            {data : 'Date'},
            {data : 'action' , name : 'action'},
        ],
    });

    $('#AddNewBtn').on('click',function(e){
        e.preventDefault();
        $('#NewExpenseModal').modal('show');
    });
    $('#formResetBtn').on('click',function(e){
        e.preventDefault();
        $('#expenseForm')[0].reset();
    });
    $('#submitBtn').on('click',function(e){
        e.preventDefault();
        $.ajax({
            type    : 'POST',
            url     : '/expense',
            data    : $('#expenseForm').serializeArray(),success:function(data){
                $('#expenseForm')[0].reset();
                $('#NewExpenseModal').modal('hide');
                Swal.fire(
                  'Success!',
                  data,
                  'success'
                );
                ExpenseList.draw(false);
            },
            error:function(date){
                console.log('Error while added new Expense Item'+data);
            },
        });
    });
    $('.ShowBtn').on('click',function(e){
        e.preventDefault();
        $.ajax({
            type    :'GET',
            url     : '/expense',
            success:function(data){
                $('#ShowExpenseModal').modal('show');
            },
            error:function(data){
                console.log(data);
            }
        });
        
    })
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
                    type    : 'GET',
                    url     : "/expense/delete/"+ID,
                    success:function(data){
                        ExpenseList.draw(false);
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

    $('body').on('click','#EditBtn',function(e){
        e.preventDefault();
        var ID = $(this).data('id');
        // console.log(ID);
        $.ajax({
            type : 'GET',
            url  : '/expense/'+ID,
            success:function(data){
                // console.log(data);
                // console.log(data['Amount']);
                $('#updateExpenseForm')[0].reset();
                $('#EditId').val(data['id']);
                $('#EditCategory').val(data['CategoryID']);
                $('#AmountEdit').val(data['Amount']);
                $('#EditDescription').val(data['Description']);
                $('#EditDate').val(data['Date']);
                $('#EditExpenseModal').modal('show');
            },
            error:function(data){
                console.log(data);
            },
        });
    });
    $('#updateBtn').on('click',function(e) {
        e.preventDefault();
        var ID = $('#EditId').val();
        $.ajax ({
            type    : 'PATCH',
            url     : '/expense/'+ID,
            data    : $('#updateExpenseForm').serializeArray(),
            success:function(data){
                $('#EditExpenseModal').modal('hide');
                $('#updateExpenseForm')[0],reset();
                Swal.fire(
                  'Success!',
                  data,
                  'success'
                );
                ExpenseList.draw(false);
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
            url  : '/expense/'+ID,
            success:function(data){
                $('#ViewCategoryName').text(data['CategoryName']);
                $('#ViewAmount').text(data['Amount']);
                $('#ViewDescription').text(data['Description']);
                $('#ViewDate').text(data['Date']);

                $('#ShowExpenseModal').modal('show');
            },
            error:function(data){
                console.log(data);
            },
        });
    });
});