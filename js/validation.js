
$(document).ready(function() {
//login form validation
$("#login_form").validate({
    rules: {
      username: {
        required: true,
        username: true,
      },
       password: {
        required: true,
      },          
    },
    messages : {
       username: {
        required: "<b style='color:red;'>Please Enter Register User Name</b>",

      },
      password: {
        required: "<b style='color:red;'>Please Enter Password</b>",
     
      },
    }   
  });

});

