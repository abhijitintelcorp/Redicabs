<?php
session_start();
unset($_SESSION["EmailId"]);
unset($_SESSION["Password"]);
header("location:login.php");
