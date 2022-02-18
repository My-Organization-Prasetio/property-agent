import {viewAllSupplier} from './initSupplier.js';

export function initAction() {
    /*******************************************************************************************
                                VALIDATE INPUT DATA SUPPLIER
    *******************************************************************************************/
    $("form[name='add-supplier']").validate({
        // Specify validation rules
        rules: {
            vendor_name: "required",
            vendor_pic_name: "required",
            vendor_phone_number: "required",
            vendor_top: "required"
        },
        // Specify validation error messages
        messages: {
            vendor_name: "Supplier is required",
            vendor_pic_name: "PIC is required",
            vendor_phone_number: "Phone Numberis required",
            vendor_top: "TOP is required"
        },
        submitHandler: function (form) {
            try {
                $.ajax({
                    url: rootApp + "api/supplier/add",
                    type: "POST",
                    data: $("#add-supplier").serialize(),
                    dataType: "json",
                    success: function (res) {
                        $("#modal_form_add").modal("hide");
                        pnotifySuccess(res.status, res.message);
                        viewAllSupplier();
                    },
                    error: function (request, error) {
                        pnotifyError('Error', JSON.stringify(request.statusText));
                    },
                });
            } catch (error) {
                console.log(error);
            }
        },
    });

    /*******************************************************************************************
                                    ON CLICK BUTTON EDIT
    *******************************************************************************************/
    $("#table-body-supplier").on("click", ".btn-edit", function () {
        var id = $(this).data("id");
        $.ajax({
            url: rootApp + "api/supplier/get-by-id",
            type: "GET",
            data: {
                id : id
            },
            dataType: "json",
            success: function (res) {
                const data = res.data[0];
                $("#modal_form_edit").modal("show");
                $("#vendor_id").val(data.vendor_id);
                $("#vendor_name").val(data.vendor_name);
                $("#vendor_phone_number").val(data.vendor_phone_number);
                $("#vendor_pic_email").val(data.vendor_pic_email);
                $("#vendor_pic_name").val(data.vendor_pic_name);
                $("#vendor_top").val(data.vendor_top);
                $("#vendor_address").val(data.vendor_address);
            },
            error: function (request, error) {
                // console.log("Request: " + JSON.stringify(request));
            },
        });
    });

    $("form[name='edit-supplier']").validate({
        // Specify validation rules
        rules: {
            vendor_name: "required",
            vendor_pic_name: "required",
            vendor_phone_number: "required",
            vendor_top: "required"
        },
        // Specify validation error messages
        messages: {
            vendor_name: "Supplier is required",
            vendor_pic_name: "PIC is required",
            vendor_phone_number: "Phone Numberis required",
            vendor_top: "TOP is required"
        },
        submitHandler: function (form) {
            try {
                $.ajax({
                    url: rootApp + "api/supplier/edit",
                    type: "POST",
                    data: $("#edit-supplier").serialize(),
                    dataType: "json",
                    success: function (res) {
                        $("#modal_form_edit").modal("hide");
                        pnotifySuccess(res.status, res.message);
                        viewAllSupplier();
                    },
                    error: function (request, error) {
                        pnotifyError('Error', JSON.stringify(request.statusText));
                    },
                });
            } catch (error) {
                console.log(error);
            }
        },
    });

    /*******************************************************************************************
                                    ON CLICK BUTTON DELETE
    *******************************************************************************************/
    $("#table-body-supplier").on("click", ".btn-delete", function () {
        var id = $(this).data("id");
        // Setup
        var notice = new PNotify({
            title: 'Confirmation',
            text: "<p>Are you sure you want to delete this record? You can't restore.</p>",
            hide: false,
            type: 'warning',
            confirm: {
                confirm: true,
                buttons: [
                    {
                        text: 'Yes',
                        addClass: 'btn btn-sm btn-primary'
                    },
                    {
                        addClass: 'btn btn-sm btn-link'
                    }
                ]
            },
            buttons: {
                closer: false,
                sticker: false
            }
        });

        // On Comfirm
        notice.get().on('pnotify.confirm', function() {
            $.ajax({
                url: rootApp + "api/supplier/delete",
                type: "POST",
                data: {id: id},
                dataType: "json",
                success: function (res) {
                    pnotifySuccess(res.status, res.message);
                    viewAllSupplier();
                },
                error: function (request, error) {
                    pnotifyError('Error', JSON.stringify(request.statusText));
                },
            });
        });


    });
};

