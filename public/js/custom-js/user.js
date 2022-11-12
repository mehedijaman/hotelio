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
                    var data = dt.button.exportData(data);
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

    $('body').on('click','#DeleteBtn',function(e){
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
          if (result.isConfirmed) {
            $.ajax({
                type:'GET',
                url:'/user/delete/'+ID,
                success:function(data){
                    UserList.draw(false); 
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

    $('body').on('click','#AssignRoleBtn',function(e){
        e.preventDefault();
        var ID = $(this).data('id');
         $('#AssignRoleUserID').val(ID);
        $('#AssignRoleModal').modal('show');
    });

    $('#AssignRoleForm').on('submit',function(e){
        e.preventDefault();

        Swal.fire({
          title: 'Assign Role ?',
          text: "Access can be revoked anytime. No Worry!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Assign New Role'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
                type:'POST',
                url:'/user/assign/role/',
                data:$('#AssignRoleForm').serialize(),
                success:function(data){
                    $('#AssignRoleModal').modal('hide');
                    UserList.draw(false); 
                    Swal.fire(
                      'Role Assigned!',
                      'New role assigned successfully',
                      'success'
                    );
                },
                error:function(data){
                    Swal.fire(
                      'Error!',
                      'Role Assign Failed !',
                      'error'
                    );
                    console.log(data);
                },
            });            
          }
        });
    });


});