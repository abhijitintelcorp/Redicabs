<?php
include("includes/config.php");
if (isset($_POST["DriverName"])) {
    $DriverName = $_POST['DriverName'];

    $query2 = "SELECT * FROM tblbooking WHERE DriverName = '$DriverName' GROUP BY DriverName ASC";
    $run_query2 = mysqli_query($conn, $query2);

    $rows = mysqli_fetch_assoc($run_query2);
    $DriverMobile = $rows['DriverMobile'];
    echo $DriverMobile;
}