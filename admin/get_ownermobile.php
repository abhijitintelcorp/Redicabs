<?php
include("includes/config.php");
if (isset($_POST["OwnerName"])) {
    $OwnerName = $_POST['OwnerName'];

    $query2 = "SELECT * FROM tblbooking WHERE OwnerName = '$OwnerName' GROUP BY OwnerName ASC";
    $run_query2 = mysqli_query($conn, $query2);
    $rows = mysqli_fetch_assoc($run_query2);
    $owner_mobile = $rows['owner_mobile'];
    echo $owner_mobile;
}
?>