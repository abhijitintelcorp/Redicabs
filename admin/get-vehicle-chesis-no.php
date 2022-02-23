<?php
   include("includes/config.php");
  if(isset($_POST["owner_vehicle_name"])){
	$owner_vehicle_name= $_POST['owner_vehicle_name'];
    //Get all city data

    $query2 = "SELECT * FROM tblbooking WHERE owner_vehicle_name = '$owner_vehicle_name' GROUP BY owner_vehicle_name ASC";
    $run_query2 = mysqli_query($conn, $query2);
    $rows = mysqli_fetch_assoc($run_query2);
	$owner_vehicle_chesis_no=$rows['owner_vehicle_chesis_no']; 
    echo $owner_vehicle_chesis_no;
}
?>