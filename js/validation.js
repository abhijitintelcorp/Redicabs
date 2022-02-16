$(document).ready(function() {
    $("#signup_form").submit(function(e) {
        e.preventDefault();

        var username = $("#username").val();
        var email = $("#email").val();
        var number = $("#number").val();
        var password = $("#password").val();
        var confirm_password = $("#confirm_password").val();

        $(".error").remove();
        if (username.length < 1) {
            $("#username").after('<span class="error">This field is required</span>');
        }
        if (email.length < 1) {
            $("#email").after('<span class="error">This field is required</span>');
        } else {
            var regEx = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            var validemail = regEx.test(email);
            if (!validemail) {
                $("#email").after('<span class="error">Enter a valid email</span>');
            }
        }
        if (number.length < 1) {
            $("#number").after('<span class="error">This field is required</span>');
        }
        if (password.length < 8) {
            $("#password").after(
                '<span class="error">Password must be at least 8 characters long</span>'
            );
        }
        if (confirm_password.length < 8) {
            $("#confirm_password").after(
                '<span class="error">Password must be at least 8 characters long</span>'
            );
        }
    });

    $('form[id="signup_form"]').validate({
        rules: {
            username: "required",

            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 8,
            },
            confirm_password: {
                required: true,
                equalTo: "#password",
            },
        },
        messages: {
            username: "This field is required",
            email: "Enter a valid email",
            password: {
                minlength: "Password must be at least 8 characters long",
            },
            confirm_password: {
                minlength: "Password must be at least 8 characters long",
                equalTo: "Password does not match.",
            },
        },
        submitHandler: function(form) {
            form.submit();
        },
    });
});
