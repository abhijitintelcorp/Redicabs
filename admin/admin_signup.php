<?php
include("includes/config.php");
$email = $_POST['email'];
$password = $_POST['password'];

//to prevent from mysqli injection  
$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

$sql = "select *from tblbooking  where EmailId  = '$email' and Password  = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    header("location:index.php");
} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
}
