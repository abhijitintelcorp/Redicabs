$(document).ready(function() {
$("#signup_form").validate({
    rules: {
      username : {
        required: true,
        minlength: 3
      },
      email: {
        required: true,
        email: true
      },
        contact: {
        required: true,
        minlength: 10
      },
      password_id: {
        required: true, 
        minlength:8,
      },
      cpassword: {
        minlength:8,
        equalTo: "#password_id"
      }
    },
    messages : {
      username: {
        required: "<b style='color:red'>Please enter your Full Name</b>",
        minlength: "<b style='color:red'>Full Name should be at least 3 characters</b>"
      },
      email: {
        required: "<b style='color:red'>Please enter Email Id</b>",
        email: "<b style='color:red'>The email should be in the format: abc@domain.tld</b>"
      },
      contact: {
       required: "<b style='color:red'>Please enter your Mobile Number</b>",
       number: "<b style='color:red'>Please Enter numerical values Only</b>"
      },
       password_id: {
        required: "<b style='color:red'>Please enter your Password</b>",
        minlength: "<b style='color:red'>Password should be at least 8 characters</b>",
      },
      cpassword: {
        minlength: "<b style='color:red'>Confirm Password should be at least 8 characters</b>",
        equalTo: "<b style='color:red'>Password and Confirm Password must be same</b>"
      }
    },
   submitHandler: function(form) {
   form.submit();
    }
  });
});
