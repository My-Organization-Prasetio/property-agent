import { viewAllOutlet } from "./initOutlet.js";

export function initAction() {
	/*******************************************************************************************
                                VALIDATE INPUT DATA SUPPLIER
    *******************************************************************************************/
	$("form[name='add-outlet']").validate({
		// Specify validation rules
		rules: {
			branch_name: "required",
			branch_city: "required",
		},
		// Specify validation error messages
		messages: {
			branch_name: "Branch name is required",
			branch_name: "City is required",
		},
		submitHandler: function (form) {
			$.ajax({
				url: rootApp + "api/outlet/add",
				type: "POST",
				data: $("#add-outlet").serialize(),
				dataType: "json",
				success: function (res) {
					$("#modal_form_add").modal("hide");
					pnotifySuccess(res.status, res.message);
					viewAllOutlet();
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
	$("#table-body-outlet").on("click", ".btn-edit", function () {
		var id = $(this).data("id");
		$.ajax({
			url: rootApp + "api/outlet/get-by-id",
			type: "GET",
			data: {
				id: id,
			},
			dataType: "json",
			success: function (res) {
				const data = res.data[0];
				$("#modal_form_edit").modal("show");
				$("#branch_id").val(data.branch_id);
				$("#branch_name").val(data.branch_name);
				$("#branch_spv").val(data.branch_spv);
				$("#branch_phone_number").val(data.branch_phone_number);
				$("#branch_address").val(data.branch_address);
				$("#branch_city").val(data.branch_city);
			},
			error: function (request, error) {
				// console.log("Request: " + JSON.stringify(request));
			},
		});
	});

	$("form[name='edit-outlet']").validate({
		// Specify validation rules
		rules: {
			branch_name: "required",
			branch_city: "required",
		},
		// Specify validation error messages
		messages: {
			branch_name: "Branch name is required",
			branch_name: "City is required",
		},
		submitHandler: function (form) {
			try {
				$.ajax({
					url: rootApp + "api/outlet/edit",
					type: "POST",
					data: $("#edit-outlet").serialize(),
					dataType: "json",
					success: function (res) {
						$("#modal_form_edit").modal("hide");
						pnotifySuccess(res.status, res.message);
						viewAllOutlet();
					},
					error: function (request, error) {
						pnotifyError("Error", JSON.stringify(request.statusText));
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
	$("#table-body-outlet").on("click", ".btn-delete", function () {
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
				url: rootApp + "api/outlet/delete",
				type: "POST",
				data: { id: id },
				dataType: "json",
				success: function (res) {
					pnotifySuccess(res.status, res.message);
					viewAllOutlet();
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		});
	});
}
