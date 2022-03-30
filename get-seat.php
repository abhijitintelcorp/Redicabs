<?php
include("includes/connection.php");
if (isset($_POST["Categories"])) {
    $Categories = $_POST['Categories'];

    $query = "SELECT distinct SeatingCapacity from tblbooking WHERE Categories = '$Categories'";
    $run_query = mysqli_query($conn, $query);
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    //Display cities list
    if ($count > 0) {
        echo '<option value="">Select Seat</option>';
        while ($rows = mysqli_fetch_array($run_query)) {
            $SeatingCapacity = $rows['SeatingCapacity'];
            echo "<option  value='$SeatingCapacity'>$SeatingCapacity</option>";
        }
    } else {
        echo '<option value="">no seats available</option>';
    }
}