$(document).ready(function () {
    $.noConflict();
    var HotelList = $("#HotelList").DataTable({
        dom: "Btlftip",
        serverSide: true,
        processing: true,
        responsive: true,
        buttons: [
            {
                extend: "copy",
                text: "<button class = 'btn btn-success'><i class='fa fa-copy'></i></button>",
                titleAttr: "Copy Items",
            },
            {
                extend: "excel",
                text: "<button class = 'btn btn-primary'><i class ='fa fa-file-excel'></i></button>",
                titleAttr: "Export to Excel",
                filename: "Hotel_List",
            },
            {
                extend: "pdf",
                text: "<button class='btn btn-success'><i class = 'fa fa-file-pdf'></i></button>",
                titleAttr: "Export to PDF",
                filename: "Hotel_list",
            },
            {
                extend: "csv",
                text: '<button class = "btn btn-primary"><i class="fa-solid fa-file-csv"></i></button>',
                titleAttr: "Export to CSV",
                filename: "Hotel_list",
            },
            {
                text: "<button class = 'btn btn-success'><i class = 'fa fa-file'></i></button>",
                titleAttr: "Export to JSON",
                filename: "Hotel_list",
                action: function (e, dt, button, config) {
                    var data = dt.buttons.exportData();
                    $.fn.dataTable.fileSave(new Blob([JSON.stringify(data)]));
                },
            },
        ],
        ajax: {
            url: "/hotel",
            type: "GET",
        },
        columns: [
            { data: "Name" },
            { data: "Title" },
            { data: "Email" },
            { data: "Address" },
            { data: "Phone" },
            { data: "RegNo" },
            { data: "action", name: "action" },
        ],
    });

    $("#AddNewBtn").on("click", function (e) {
        e.preventDefault();
        $("#NewHotelModal").modal("show");
    });

    $("#ResetFormBtn").on("click", function (e) {
        e.preventDefault();

        $("#NewHotelForm")[0].reset();
    });

    $("#SubmitBtn").on("click", function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "/hotel",
            data: $("#NewHotelForm").serialize(),
            success: function (data) {
                $("#NewHotelForm")[0].reset();
                $("#NewHotelModal").modal("hide");
                Swal.fire("Success!", data, "success");

                HotelList.draw(false);
            },
            error: function (data) {
                console.log("Error while adding new hotel" + data);
            },
        });
    });

    $("body").on("click", "#DeleteBtn", function (e) {
        e.preventDefault();
        var ID = $(this).data("id");

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "GET",
                    url: "/hotel/delete/" + ID,
                    success: function (data) {
                        HotelList.draw(false);
                        Swal.fire(
                            "Deleted!",
                            "Your file has been deleted.",
                            "success"
                        );
                    },
                    error: function (data) {
                        Swal.fire("Error!", "Delete failed !", "error");
                        console.log(data);
                    },
                });
            }
        });
    });

    $("body").on("click", "#EditBtn", function (e) {
        e.preventDefault();
        var ID = $(this).data("id");
        $.ajax({
            type: "GET",
            url: "/hotel/" + ID,
            success: function (data) {
                $("#UpdateHotelForm")[0].reset();
                $("#IDEdit").val(data["id"]);
                $("#NameEdit").val(data["Name"]);
                $("#TitleEdit").val(data["Title"]);
                $("#EmailEdit").val(data["Email"]);
                $("#AddressEdit").val(data["Address"]);
                $("#PhoneEdit").val(data["Phone"]);
                $("#RegNoEdit").val(data["RegNo"]);
                $("#LogoEdit").val(data["Logo"]);
                $("#PhotoEdit").val(data["Photo"]);
                $("#EditHotelModal").modal("show");
            },
            error: function (data) {
                console.log(data);
            },
        });
    });

    $("#UpdateBtn").on("click", function (e) {
        e.preventDefault();
        var ID = $("#IDEdit").val();
        $.ajax({
            type: "PATCH",
            url: "/hotel/" + ID,
            data: $("#UpdateHotelForm").serializeArray(),
            success: function (data) {
                $("#EditHotelModal").modal("hide");
                $("#UpdateHotelForm")[0].reset();
                Swal.fire("Success!", data, "success");
                HotelList.draw(false);
            },
            error: function (data) {
                console.log(data);
            },
        });
    });

    // $('body').on('click','#ViewBtn',function(e){
    //     e.preventDefault();
    //     var ID = $(this).data('id');
    //     $.ajax({
    //         type : "GET",
    //         url  : "/hotel/"+ID,
    //         success:function(data){
    //             $('#ViewName').text(data['Name']);
    //             $('#ViewTitle').text(data['Title']);
    //             $('#ViewEmail').text(data['Email']);
    //             $('#ViewPhone').text(data['Phone']);
    //             $('#ViewAddress').text(data['Address']);
    //             $('#ViewRegNO').text(data['RegNo']);

    //             $('#ShowHotelModal').modal('show');
    //         },
    //         error:function(data){
    //             console.log(data);
    //         }
    //     });
    // });
});
