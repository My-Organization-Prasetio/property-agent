$( document ).ready(function() {
    //Check Admin Login or not
    const agentLoginStatus = getCookie(appShortName+'MAIN_LOGIN_STATUS') != '' ? getCookie(appShortName+'MAIN_LOGIN_STATUS') : '';
    if(agentLoginStatus == 1){
        $('#sidebar-agent-profile').removeClass('d-none')
        $('#sidebar-profile-image').html(`<img src="${rootApp}public/images/profile/${getCookie(appShortName+'MAIN_PHOTO')}" class="rounded-circle img-thumbnail" alt="profile-image">`)
        $('#sidebar-full-name').html(getCookie(appShortName+'MAIN_fullname'))
        $('#sidebar-id-card').html(getCookie(appShortName+'MAIN_ID_CARD'))
        $('#input-user-email').val(getCookie(appShortName+'MAIN_EMAIL'))
        $('#input-user-phone').val(getCookie(appShortName+'MAIN_PHONE_NUMBER'))
        $('.input-my-property').val(getCookie(appShortName+'MAIN_USER_ID'))
    }
    
    if($("form[name='change-email']").length > 0){
        $("form[name='change-email']").validate({
            // Specify validation rules
            rules: {
                user_email: "required",
            },
            // Specify validation error messages
            messages: {
                user_email: "Masukan E-mail baru.",
            },
            submitHandler: function (form) {
                $.ajax({
                    url: rootApp + "api/user/change-email/"+getCookie(appShortName+'MAIN_USER_ID'),
                    type: "POST",
                    data: $("#change-email").serialize(),
                    dataType: "json",
                    success: function (res) {
                        setCookie(appShortName+'MAIN_EMAIL', $('#input-user-email').val(), 1)
                        $("#modal-change-email").modal("hide");
                        toastr.success(res.message, 'Berhasil')
                    },
                    error: function (request, error) {
                        toastr.error( JSON.stringify(request.statusText), 'Error')
                    },
                });
            },
        });
    }

    if($("form[name='change-phone']").length > 0){
        $("form[name='change-phone']").validate({
            // Specify validation rules
            rules: {
                user_phone_number: "required",
            },
            // Specify validation error messages
            messages: {
                user_phone_number: "Masukan no telepon baru.",
            },
            submitHandler: function (form) {
                $.ajax({
                    url: rootApp + "api/user/change-phone-number/"+getCookie(appShortName+'MAIN_USER_ID'),
                    type: "POST",
                    data: $("#change-phone").serialize(),
                    dataType: "json",
                    success: function (res) {
                        setCookie(appShortName+'MAIN_PHONE_NUMBER', $('#input-user-phone').val(), 1)
                        $("#modal-change-phone").modal("hide");
                        toastr.success(res.message, 'Berhasil')
                    },
                    error: function (request, error) {
                        toastr.error( JSON.stringify(request.statusText), 'Error')
                    },
                });
            },
        });
    }

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
                old_password: "Masukan password lama anda",
                new_password: "Masukan password baru",
                repeat_new_password: "Password tidak sama",
            },
            submitHandler: function (form) {
                $.ajax({
                    url: rootApp + "api/auth/change-password-agent/"+getCookie(appShortName+'MAIN_USER_ID'),
                    type: "POST",
                    data: $("#change-password").serialize(),
                    dataType: "json",
                    success: function (res) {
                        $("form[name='change-password']")[0].reset();
                        $("#modal-change-password").modal("hide");
                        toastr.success(res.message, 'Berhasil')
                    },
                    error: function (request, error) {
                        toastr.error( JSON.stringify(request.statusText), 'Error')
                    },
                });
            },
        });
    }

    if ($("form[name='change-photo']").length > 0) {
		$("form[name='change-photo']").validate({
			// Specify validation rules
			rules: {
				photo: "required",
			},
			// Specify validation error messages
			messages: {
				photo: "Photo is required",
			},
			submitHandler: function (form) {
				var formData = new FormData(form);

				$.ajax({
					type: "POST",
					url: rootApp + "api/auth/change-photo-by-id/"+getCookie(appShortName+'MAIN_USER_ID'),
					dataType: "json",
					data: formData,
					mimeType: "multipart/form-data",
					contentType: false,
					processData: false,
					success: function (res) {
						if ($("#sidebar-profile-image").length > 0) {
							$("#sidebar-profile-image").html(
								`<a href="#"><img src="${rootApp}public/images/profile/${res.data.photo}" width="38" height="38" class="rounded-circle" alt=""></a>`
							);
						}
                        setCookie(appShortName+'MAIN_PHOTO', res.data.photo, 1)
						$("#modal-change-photo").modal("hide");
                        toastr.success(res.message, 'Berhasil')
					},
					error: function (request, error) {
                        toastr.error( JSON.stringify(request.statusText), 'Error')
					},
				});
			},
		});
	}
    
});