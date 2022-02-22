   <?php
   include("includes/config.php");
  if(isset($_POST["owner_vehicle_name"])){
	$owner_vehicle_name= $_POST['owner_vehicle_name'];
    //Get all city data

    $query2 = "SELECT * FROM tblbooking WHERE owner_vehicle_name = '$owner_vehicle_name' 
	GROUP BY owner_vehicle_name ASC";
    $run_query2 = mysqli_query($conn, $query2);
    $rows = mysqli_fetch_ssoc($run_query2);
	$vehicle_no=$rows['owner_vehicle_no']; 
    echo "<input type='text' class='form-control' placeholder='Enter vehicle Number' name='owner_vehicle_no' id='owner_vehicle_no' value='$rows['owner_vehicle_no']' readonly='readonly'>";
}
?>

   