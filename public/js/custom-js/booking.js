$(document).ready(function(){

    $.noConflict();
    var BookingList = $('#BookingList').DataTable({
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
                titleAttr:'Export To Excel',
                filename:'Booking_List'
            },
            {
                extend:'pdf',
                text:'<button class="btn bg-purple"><i class="fa-solid fa-file-pdf"></i></button>',
                titleAttr:'Export To PDF',
                filename:'Booking_List',
            },
            {
                extend:'csv',
                text:'<button class="btn btn-info"><i class="fas fa-file-csv"></i></button>',
                titleAttr:'Export To CVS',
                filename:'Booking_List',
            },
            {
                text:'<button class="btn btn-dark"><i class="fa-solid fa-file"></i></button>',
                titleAttr:'Export To JSON',
                filename:'Booking_List',
                action:function(e,dt,button,config){
                    var data = dt.buttons.exportData();
                    $.fn.dataTable,fileSave(
                        new Blob([JSON.stringify(data)])
                    );
                },
            },
        ],
        ajax:{
            url:'/booking',
            type:'GET'
        },
        columns:[
            {data:'Room'},
            {data:'Guest'},
            {data:'CheckInDate'},
            {data:'action',name:'action'},
        ]
    })

    $(function() {
        var j = jQuery.noConflict();
        // $j("#EditCheckInDate").datepicker();
    });

    $('#ResetBtnForm').on('click',function(e){
        e.preventDefault();
        $('#NewBookingForm')[0].reset();
    });

    $('#SubmitBtn').on('click',function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/booking",
            data: $('#NewBookingForm').serializeArray(),
            success: function (data) {
                $('#NewBookingForm')[0].reset();
                $('#NewBookingModal').modal('hide');
                Swal.fire(
                    'Success !',
                    data,
                    'success'
                )

                BookingList.draw(false);
            },
            error:function(data){
                console.log('Error while adding new Booking' + data);
            }
        });
    });

    $('body').on('click','#EditBtn',function(e){
        jQuery.noConflict();
        e.preventDefault();
        var ID = $(this).data('id');
        $.ajax({
            type:"GET",
            url: "/booking/"+ID,
            success: function (data) {
                $('#EditBookingForm')[0].reset();
                $('#IDEdit').val(data['id']);
                $('#EditRoom').val(data['RoomID']);
                $('#EditGuest').val(data['GuestID']);

                var date = new Date(data['CheckInDate']);
                var d = date.getDate();
                var m = date.getMonth()+1;
                var y = date.getFullYear();

                CheckInDate = d + '/' + m + '/' + y;
                console.log(CheckInDate);
                $('#EditCheckInDate').val(CheckInDate);
                $('#EditBookingModal').modal('show');
            },
            error:function(data){
                console.log(data);
            }
        });
    });

    $('#UpdateBtn').on('click',function(e){
        
        e.preventDefault();
        
        var ID = $('#IDEdit').val();
        // console.log(ID);
        $.ajax({
            type: "PATCH",
            url: "/booking/"+ID,
            data: $('#EditBookingForm').serializeArray(),
            success: function (data) {
                $('#EditBookingForm')[0].reset();
                $('#EditBookingModal').modal('hide');
                Swal.fire(
                    'success',
                    'Booking updated successfully',
                    'success'
                );
            },
            error:function(data){
                console.log(data);
            }
        });
    });

    $('body').on('click','#DeleteBtn',function(e){
        e.preventDefault();
        // console.log($(this).val());
        let ID = $(this).data('id');
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
                url:'/booking/delete/'+ID,
                success:function(data){
                    BookingList.draw(false);
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
                url:'/booking/delete',
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
});