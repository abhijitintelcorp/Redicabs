<?php
include("includes/config.php");
session_start();

$message = "";
if (count($_POST) > 0) {
   
    $result = mysqli_query($conn, "SELECT * FROM tblbooking   WHERE EmailId='" . $_POST["EmailId"] . "' and Password = '" . $_POST["Password"] . "'");
    $row  = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["EmailId"] = $row['EmailId'];
        $_SESSION["Password"] = $row['Password'];
    } else {
        $message = "<b style='color:red'>Invalid Username or Password!";
    }
}
if (isset($_SESSION["EmailId"])) {
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="images/Redicabs.png" height="70px">
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <h2 class="login-box-msg"><b>Admin Login</b></h2>

                <form action="" name="admin_signin" method="post">
                    <div class="message"><?php if ($message != "") {
                                                echo $message;
                                            } ?></div>
                    <div class="message text-danger">

                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="EmailId" id="EmailId">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="Password" id="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row ">

                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block" style=" display: flex;" name="btnsubmit">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>

                </form>

                <!-- <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div> -->

            </div>

        </div>
    </div>


    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>