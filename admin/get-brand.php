   <?php
   include("includes/config.php");
   if(isset($_POST["SeatingCapacity"])){
   $SeatingCapacity = $_POST['SeatingCapacity'];
   $qry = "SELECT  * FROM tblbooking WHERE SeatingCapacity='$SeatingCapacity' GROUP BY owner_vehicle_brand ASC";
   $exe = mysqli_query($conn, $qry);
   $count = mysqli_num_rows($exe);

    if($count > 0){
        echo '<option value="">Select Brand</option>';
      while($row = mysqli_fetch_assoc($exe)){
		$brand_name=$row['owner_vehicle_brand'];
        echo "<option value=$brand_name>$brand_name</option>";
        }
    } else{
        echo '<option value="">Brand Name not available</option>';
    }
<<<<<<< HEAD
   }
=======
   
>>>>>>> archana
  if(isset($_POST["owner_vehicle_brand"])){
	$owner_vehicle_brand= $_POST['owner_vehicle_brand'];
    //Get all city data

    $query = "SELECT * FROM tblbooking WHERE owner_vehicle_brand = '$owner_vehicle_brand' 
	GROUP BY owner_vehicle_name ASC";
    $run_query = mysqli_query($conn, $query);
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    //Display cities list
    if($count > 0){
        echo '<option value="">Select Vehicle Name</option>';
        while($rows = mysqli_fetch_array($run_query)){
		$vehicle_name=$rows['owner_vehicle_name']; 
        echo "<option  value='$vehicle_name'>$vehicle_name</option>";
        }
    }else{
        echo '<option value="">Vehicle Name not available</option>';
    }
}
if(isset($_POST["owner_vehicle_name"])){
	$owner_vehicle_name= $_POST['owner_vehicle_name'];
    //Get all city data
<<<<<<< HEAD

    $query2 = "SELECT * FROM tblbooking WHERE owner_vehicle_name = '$owner_vehicle_name' 
	GROUP BY owner_vehicle_name ASC";
    $run_query2 = mysqli_query($conn, $query2);
    //Count total number of rows
    $count2 = mysqli_num_rows($run_query2);
    //Display cities list
    if($count2 > 0){
        while($rows = mysqli_fetch_array($run_query2)){
		$owner_name=$rows['OwnerName']; 
        echo "<option  value='$owner_name'>$owner_name</option>";
        }
    }else{
        echo '<option value="">Vehicle Name not available</option>';
    }
}
?>
=======
>>>>>>> archana

    $query2 = "SELECT * FROM tblbooking WHERE owner_vehicle_name = '$owner_vehicle_name' 
	GROUP BY owner_vehicle_name ASC";
    $run_query2 = mysqli_query($conn, $query2);
    //Count total number of rows
    $count2 = mysqli_num_rows($run_query2);
    //Display cities list
    if($count2 > 0){
        while($rows = mysqli_fetch_array($run_query2)){
		$owner_name=$rows['OwnerName']; 
        echo "<option  value='$owner_name'>$owner_name</option>";
        }
    }else{
        echo '<option value="">Owner Name not available</option>';
    }
}
    ?>