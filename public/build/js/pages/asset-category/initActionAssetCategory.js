import { viewAllAssetCategory } from "./initAssetCategory.js";

export function initAction() {
	/*******************************************************************************************
                                VALIDATE INPUT DATA SUPPLIER
    *******************************************************************************************/
	$("form[name='add-asset-category']").validate({
		// Specify validation rules
		rules: {
			asset_cateegory_name: "required",
		},
		// Specify validation error messages
		messages: {
			asset_cateegory_name: "Jenis aset harus diisi",
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			$.ajax({
				url: rootApp + "api/asset-category/add",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					$("#modal_form_add").modal("hide");
					pnotifySuccess(res.status, res.message);
					viewAllAssetCategory();
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		},
	});
}
