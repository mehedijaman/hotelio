$(document).ready(function(){
    $.noConflict();
    var CategoryList = $('#IncomeCategoryList').DataTable({
        processing: true,
        serversite: true,
        colReorder: true,
        stateSave : true,
        reponsive : true,
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
            type : "GET",
            url  : "/income/category",
        },
        columns:[
            {data : 'Name'},
            {data : 'action', name : 'action'},
        ],
    });

    $('#AddNewBtn').on('click',function(e){
        e.preventDefault();
        $('#NewCategorylModal').modal('show');
    });
    $('#formResetBtn').on('click',function(e){
        e.preventDefault();
        $('#categoryForm')[0].reset();
    });
    $('#submitBtn').on('click',function(e){
        e.preventDefault();
        $.ajax({
            type    : 'POST',
            url     : '/income/category',
            data    : $('#categoryForm').serializeArray(),success:function(data){
                $('#categoryForm')[0].reset();
                $('#NewCategorylModal').modal('hide');
                Swal.fire(
                  'Success!',
                  data,
                  'success'
                );
                CategoryList.draw(false);
            },
            error:function(data){
                console.log('Eerror while added category !' + data);
            }
        });
    });
    $('body').on('click','#EditBtn',function(e){
        e.preventDefault();
        var ID = $(this).data('id');
        $.ajax({
            type    : 'GET',
            url     : '/income/category/'+ID,
            success:function(data){
                // console.log(data['Name']);
                $('#updateCategoryForm')[0].reset();
                $('#EditID').val(data['id']);
                $('#EditName').val(data['Name']);
                $('#EditCategorylModal').modal('show');
            },
            error:function(data){
                console.log(data);
            }
        });
    });
    $('#UpdateBtn').on('click',function(e){
        e.preventDefault();
        var ID = $('#EditID').val();
        $.ajax({
            type    : 'PATCH',
            url     : '/income/category/'+ID,
            data    : $('#updateCategoryForm').serializeArray(),
            success:function(data){
                $('#EditCategorylModal').modal('hide');
                $('#updateCategoryForm')[0].reset();
                Swal.fire(
                  'Success!',
                  data,
                  'success'
                );
                CategoryList.draw(false);
            },
            error:function(data){
                console.log(data);
            },
        });
    });
});