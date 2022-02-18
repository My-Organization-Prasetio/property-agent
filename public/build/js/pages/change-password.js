document.addEventListener("DOMContentLoaded", function () {
	if($("form[name='change-password']").length > 0){
        $("form[name='change-password']").validate({
            // Specify validation rules
            rules: {
                old_password: "required",
                new_password: "required",
                repeat_new_password: {
                    equalTo : "#new_password"
                }
            },
            // Specify validation error messages
            messages: {
                old_password: "Material name is required",
                new_password: "Material name is required",
                repeat_new_password: "New password doesn't match",
            },
            submitHandler: function (form) {
                $.ajax({
                    url: rootApp + "api/auth/change-password",
                    type: "POST",
                    data: $("#change-password").serialize(),
                    dataType: "json",
                    success: function (res) {
                        $("#modal-change-password").modal("hide");
                        pnotifySuccess(res.status, res.message);
                    },
                    error: function (request, error) {
                        pnotifyError("Error", JSON.stringify(request.statusText));
                    },
                });
            },
        });
    }
});