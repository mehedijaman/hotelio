$(document).ready(function(){
    $.noConflict();
    var GuestList = $('#GuestTable').DataTable({
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
                filename: "Guest_List",

            },
            {
                extend : 'pdf',
                text : "<button class='btn btn-success'><i class = 'fa fa-file-pdf'></i></button>",
                titleAttr : 'Export to PDF',
                filename : 'Guest_list',
            },
            {
                extend : 'csv',
                text : '<button class = "btn btn-primary"><i class="fa-solid fa-file-csv"></i></button>',
                titleAttr : "Export to CSV",
                filename : 'Guest_list',
            },
            {
                text : "<button class = 'btn btn-success'><i class = 'fa fa-file'></i></button>",
                titleAttr : "Export to JSON",
                filename : 'Guest_list',
                action:function(e,dt,button,config){
                    var data = dt.buttons.exportData();
                    $.fn.dataTable.fileSave(
                        new Blob([JSON.stringify(data)])
                    );
                },
            },
        ],
        ajax:{
            url : "/guest",
            type: "GET"
        },
        columns:[
            {data : 'Name'},
            {data : 'Email'},
            {data : 'Address'},
            {data : 'Phone'},
            {data : 'action',name:'action'},

        ],
    });

    $('#NewAddBtn').on('click',function(e){
        e.preventDefault();
        $('#NewGuestModal').modal('show');
    });

    $('#formResetBtn').on('click',function(e){
        e.preventDefault();
        $('#guestForm')[0].reset();
    });

    $('#submitBtn').on('click',function(e) {
        e.preventDefault();
        $.ajax({
            type    :'POST',
            url     : '/guest',
            data    : $('#guestForm').serialize(),success:function(data){
                $('#guestForm')[0].reset();
                $('#NewGuestModal').modal('hide');
                Swal.fire(
                  'Success!',
                  data,
                  'success'
                );
                GuestList.draw(false);
            },
            error:function(data){
                console.log('Error while adding new Bank'+data);
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
          if (result.isConfirmed) {
            $.ajax({
                type:'GET',
                url:'/guest/delete/'+ID,
                success:function(data){
                    GuestList.draw(false);
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
            url     : '/guest/'+ID,
            data    : $('#updateGuestForm').serializeArray(),
            success:function(data){
                $('#updateGuestForm')[0].reset();
                $('#IDEdit').val(data['id']);
                $('#EditName').val(data['Name']);
                $('#EditEmail').val(data['Email']);
                $('#EditAddress').val(data['Address']);
                $('#EditPhone').val(data['Phone']);
                $('#EditNIDNo').val(data['NIDNo']);
                $('#EditNID').val(data['NID']);
                $('#EditPassportNo').val(data['PassportNo']);
                $('#EditPassport').val(data['Passport']);
                $('#EditFather').val(data['Father']);
                $('#EditMother').val(data['Mother']);
                $('#EditSpouse').val(data['Spouse']);
                $('#EditPhoto').val(data['Photo']);
                $('#EditGuestModal').modal('show');
            },
            error:function(data){
                console.log(data);
            },
        });
    });

    $('#UpdateBtn').on('click',function(e) {
        e.preventDefault();
        var ID = $('#IDEdit').val();
        $.ajax({
            type    : 'PATCH',
            url     : '/guest/'+ID,
            data    : $('#updateGuestForm').serializeArray(),
            success:function(data){
                $('#EditGuestModal').modal('hide');
                $('#updateGuestForm')[0].reset();
                Swal.fire(
                  'Success!',
                  data,
                  'success'
                );
                GuestList.draw(false);
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
            type : 'GET',
            url  : '/guest/'+ID,
            success:function(data){
                // console.log(data['Name']);
                $('#ViewName').text(data['Name']);
                $('#ViewEmail').text(data['Email']);
                $('#ViewPhone').text(data['Phone']);
                $('#ViewAddress').text(data['Address']);
                $('#ViewNIDNo').text(data['NIDNo']);
                $('#ViewNID').text(data['NID']);
                $('#ViewPassportNo').text(data['PassportNo']);
                $('#ViewPassport').text(data['Passport']);
                $('#ViewFather').text(data['Father']);
                $('#ViewMother').text(data['Mother']);
                $('#ViewSpouse').text(data['Spouse']);
                $('#ViewPhoto').text(data['Photo']);

                $('#ShowGuestModal').modal('show');
            },

            error:function(data){
                console.log(data);
            }
        });
    });


});