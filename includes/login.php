<?php
<<<<<<< HEAD
include "connection.php";
if (isset($_POST['login_submit'])) {
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
  $select = "SELECT * FROM tblbooking WHERE email='$email' && Password='$password'";
  $res = mysqli_query($conn, $select);
  $count = mysqli_num_rows($res);
  if ($count == 1) {
    // $msg = "Username & Password Matched.";
    $currentpage = $_SERVER['REQUEST_URI'];
    echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
  } else {
    // echo "<script>alert('Invalid Details');</script>";
  }
}
=======
  include "connection.php";
  if(isset($_POST['login_submit'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $select = "SELECT * FROM tblbooking WHERE UserName='$username' && Password='$password'";
    $res = mysqli_query($conn, $select);
    $count=mysqli_num_rows($res);
    if($count==1){
      // $msg = "Username & Password Matched.";
      $currentpage=$_SERVER['REQUEST_URI'];
echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
}else{
     // echo "<script>alert('Invalid Details');</script>";
    }
  }
>>>>>>> pragyan
?>
<html>

<<<<<<< HEAD
</html>
<link rel="stylesheet" href="css/w3.css">
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

    <div class="w3-center"><br>
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      <img src="images/icons/login.png" alt="Avatar" style="width:10%" class="w3-circle w3-margin-top">
    </div>

    <form class="w3-container" action="" method="post" name="login_form" id="login_form">
      <div class="w3-section">
        <div>
          <label><b>User Email</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter email" name="email" id="email">
        </div>
        <div>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" id="password">
        </div>
        <input class="w3-check w3-margin-top" type="checkbox" checked="checked">Remember Me
        <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" value="submit" name="login_submit">Login</button>
      </div>
    </form>

    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <div class="w3-padding w3-hide-small">
        <center>

          <p onclick="document.getElementById('id02').style.display='block'">Don't have an account? Signup Here</p>
        </center>
=======
<link rel="stylesheet" href="css/w3.css">
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="images/icons/login.png" alt="Avatar" style="width:10%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="" method="post" name="login_form" id="login_form">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" id="username" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" id="password" required>
           <input class="w3-check w3-margin-top" type="checkbox" checked="checked">Remember Me
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="login_submit">Login</button>        
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <div class="w3-padding w3-hide-small">
          <center><p onclick="document.getElementById('id02').style.display='block'">Don't have an account? Signup Here</p>
          </center></div>
<!--         <div class="w3-right w3-padding w3-hide-small"><a href="#">Forgot Password?</a></div> -->      
>>>>>>> pragyan
      </div>
      <!--         <div class="w3-right w3-padding w3-hide-small"><a href="#">Forgot Password?</a></div> -->
    </div>
  </div>
<<<<<<< HEAD
</div>


</html>
=======
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/additional-methods.min.js"></script>
  <script src="js/validation.js"></script>
>>>>>>> pragyan
