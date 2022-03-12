<?php
include("includes/config.php");
if (isset($_POST["owner_vehicle_name"])) {
    $owner_vehicle_name = $_POST['owner_vehicle_name'];


    $query2 = "SELECT * FROM tblbooking WHERE owner_vehicle_name = '$owner_vehicle_name' GROUP BY owner_vehicle_name ASC";
    $run_query2 = mysqli_query($conn, $query2);
    $rows = mysqli_fetch_assoc($run_query2);
    $DriverName = $rows['DriverName'];
    echo $DriverName;
}