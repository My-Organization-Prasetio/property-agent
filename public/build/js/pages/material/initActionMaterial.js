import { viewAllMaterial } from "./initMaterial.js";

export function initAction() {
	/*******************************************************************************************
                                VALIDATE INPUT DATA SUPPLIER
    *******************************************************************************************/
	$("form[name='add-material']").validate({
		// Specify validation rules
		rules: {
			product_name: "required",
			product_unit: "required",
			product_price: "required",
			product_margin_price: "required",
			product_after_margin_price: "required",
		},
		// Specify validation error messages
		messages: {
			product_name: "Material name is required",
			product_unit: "Unit is required",
			product_price: "Material price is required",
			product_margin_price: "Material margin price is required",
			product_after_margin_price: "After margin price is required",
		},
		submitHandler: function (form) {
			$.ajax({
				url: rootApp + "api/material/add",
				type: "POST",
				data: $("#add-material").serialize(),
				dataType: "json",
				success: function (res) {
					$("#modal_form_add").modal("hide");
					pnotifySuccess(res.status, res.message);
					viewAllMaterial();
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		},
	});

	/*******************************************************************************************
                                    ON CLICK BUTTON EDIT
    *******************************************************************************************/
	$("#table-body-material").on("click", ".btn-edit", function () {
		var id = $(this).data("id");
		$.ajax({
			url: rootApp + "api/material/get-by-id",
			type: "GET",
			data: {
				id: id,
			},
			dataType: "json",
			success: function (res) {
				const data = res.data[0];
				$("#modal_form_edit").modal("show");
                $("#product_id").val(data.product_id);
                $("#product_name").val(data.product_name);
                $("#category_id").val(data.category_id);
                $("#product_unit").val(data.product_unit);
                $("#product_price_show").val("Rp_ "+numberWithCommas(data.product_price));
                $("#product_price").val(data.product_price);
                $("#product_margin_price_show").val("Rp_ "+data.product_margin_price);
                $("#product_margin_price").val(numberWithCommas(data.product_margin_price));
                $("#product_after_margin_price_show").val("Rp_ "+data.product_after_margin_price);
                $("#product_after_margin_price").val(numberWithCommas(data.product_after_margin_price));
                $("#product_description").val(data.product_description);
			},
			error: function (request, error) {
				// console.log("Request: " + JSON.stringify(request));
			},
		});
	});

	$("form[name='edit-material']").validate({
	    // Specify validation rules
	    rules: {
			product_name: "required",
			product_unit: "required",
			product_price: "required",
			product_margin_price: "required",
			product_after_margin_price: "required",
		},
		// Specify validation error messages
		messages: {
			product_name: "Material name is required",
			product_unit: "Unit is required",
			product_price: "Material price is required",
			product_margin_price: "Material margin price is required",
			product_after_margin_price: "After margin price is required",
		},
	    submitHandler: function (form) {
	        try {
	            $.ajax({
	                url: rootApp + "api/material/edit",
	                type: "POST",
                data: $("#edit-material").serialize(),
	                dataType: "json",
	                success: function (res) {
	                    $("#modal_form_edit").modal("hide");
	                    pnotifySuccess(res.status, res.message);
	                    viewAllMaterial();
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
	$("#table-body-material").on("click", ".btn-delete", function () {
		var id = $(this).data("id");
		// Setup
		var notice = new PNotify({
			title: "Confirmation",
			text: "<p>Are you sure you want to delete this record? You can't restore.</p>",
			hide: false,
			type: "warning",
			confirm: {
				confirm: true,
				buttons: [
					{
						text: "Yes",
						addClass: "btn btn-sm btn-primary",
					},
					{
						addClass: "btn btn-sm btn-link",
					},
				],
			},
			buttons: {
				closer: false,
				sticker: false,
			},
		});

		// On Comfirm
		notice.get().on("pnotify.confirm", function () {
			$.ajax({
				url: rootApp + "api/material/delete",
				type: "POST",
				data: { id: id },
				dataType: "json",
				success: function (res) {
					pnotifySuccess(res.status, res.message);
					viewAllMaterial();
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		});
	});
}
