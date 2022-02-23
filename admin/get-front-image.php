<?php
   include("includes/config.php");
  if(isset($_POST["owner_vehicle_name"])){
	$owner_vehicle_name= $_POST['owner_vehicle_name'];
    //Get all city data

    $query2 = "SELECT * FROM tblbooking WHERE owner_vehicle_name = '$owner_vehicle_name'";
    $run_query2 = mysqli_query($conn, $query2);
    $rows = mysqli_fetch_assoc($run_query2);
    $count2 = mysqli_num_rows($run_query2);
      if($count2 > 0){   
    echo "<img src='images/".$rows['frontimage']."' style='width:50%;margin-left:10px;' name='frontimage' id='frontimage'>";
    }else{
        echo 'Image not available';
    }
}
?>