<?php
//Include database configuration file
include("includes/config.php");

if (isset($_POST["id"])) {
    //Get all state data
    $id = $_POST['id'];
    $query = "SELECT  owner_vehicle_brand from tblbooking where id='$id' ";
    $run_query = mysqli_query($conn, $query);

    //Count total number of rows
    $count = mysqli_num_rows($run_query);

    //Display states list
    if ($count > 0) {
        echo '<option value="">Select brand</option>';
        while ($row = mysqli_fetch_array($run_query)) {
            $id = $row['id'];
            $brand = $row['owner_vehicle_brand'];
            echo "<option value='$id'>$brand</option>";
        }
    } else {
        echo '<option value="">State not available</option>';
    }
}

if (isset($_POST["id"])) {
    $id = $_POST['id'];
    //Get all city data
    $query = "SELECT  owner_vehicle_name from tblbooking where id='$id'";
    $run_query = mysqli_query($conn, $query);
    //Count total number of rows
    $count = mysqli_num_rows($run_query);

    //Display cities list
    if ($count > 0) {
        echo '<option value="">Select city</option>';
        while ($row = mysqli_fetch_array($run_query)) {
            $id = $row['id'];
            $owner_vehicle_name = $row['owner_vehicle_name'];
            echo "<option value='$id'>$owner_vehicle_name</option>";
        }
    } else {
        echo '<option value="">City not available</option>';
    }
}