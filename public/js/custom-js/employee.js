$(document).ready(function(){
    $.noConflict();
    var EmployeeList = $('#Employeelist').DataTable({
        dom         : 'Btlftip',
        processing:true,
        colReorder:true,
        serverSide:true,
        stateSave :true,
        responsive:true,
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
        ajax:{
            url : "/employee",
            type: "GET"
        },
        columns:
        [
            {data : 'Hotel'},
            {data : 'Name'},
            {data : 'Designation'},
            {data : 'Phone'},
            {data : 'Email'},
            {data : 'DateOfJoin'},
            {data : 'Status'},
            {data : 'action',name:'action'},
        ]
    });
    $('#AddNewBtn').on('click',function(e){
        e.preventDefault();
        $('#newEmployeeModal').modal('show'); 
    });
    $('#formResetBtn').on('click',function(e){
        e.preventDefault();
        $('#newCreateEmployee')[0].reset();
    });
    $('#submitBtn').on('click',function(e){
        e.preventDefault();
        $.ajax({
            type    : 'POST',
            url     : '/employee',
            data    : $('#newCreateEmployee').serialize(),success:function(data){
                $('#newCreateEmployee')[0].reset();
                $('#newEmployeeModal').modal('hide'); 
                Swal.fire(
                    'Success!',
                    data,
                    'success'
                );
                EmployeeList.draw(false);
            },
            error:function(data){
                console.log('Error while adding new Bank'+data);
            },
        });
    });
    $('body').on('click','#DeleteBtn',function(e) {
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
        }).then((result)=>{
            if(result.isConfirmed){
                $.ajax({
                    type    :   "GET",
                    url     : "/employee/delete/"+ID,
                    success:function(data){
                        EmployeeList.draw(false);
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
    $('body').on('click','#EditBtn',function(e) {
        e.preventDefault();
        var ID = $(this).data('id');
        $.ajax({
            type    : 'GET',
            url     : '/employee/'+ID,
            data    : $('updateForm').serializeArray(),
            success:function(data){
                // console.log(data['Name']);
                $('#updateForm')[0].reset();
                $('#IDEdit').val(data['id']);
                $('#HotelIDEdit').val(data['HotelID']);
                $('#EditName').val(data['Name']);
                $('#DesignationEdit').val(data['Designation']);
                $('#DateOfBirthEdit').val(data['DateOfBirth']);
                $('#NIDNoEdit').val(data['NIDNo']);
                $('#NIDEdit').val(data['NID']);
                $('#PhoneEdit').val(data['Phone']);
                $('#EmailEdit').val(data['Email']);
                $('#AddressEdit').val(data['Address']);
                $('#DateOfJoinEdit').val(data['DateOfJoin']);
                $('#StatusEdit').val(data['Status']);
                $('#EditEmployeeModal').modal('show');
            },
            error:function(data){
                console.log(data);
            },
        });
    });
    $('#updateBtn').on('click',function(e) {
            e.preventDefault();
            var ID = $('#IDEdit').val();
            $.ajax({
                type    : 'PATCH',
                url     : '/employee/'+ID,
                data    : $('#updateForm').serializeArray(),
                success:function(data){
                    $('#EditEmployeeModal').modal('hide');
                    $('#updateForm')[0].reset();
                    Swal.fire(
                      'Success!',
                      data,
                      'success'
                    );
                    EmployeeList.draw(false);
                },
                error:function(data){
                    console.log(data);
                },
            });
        });
});