   <?php
     include("includes/config.php");


     $id = $_GET['id'];
     $qry = "SELECT  owner_vehicle_name from tblbooking where id='$id'";
     $options = "<option value=''>Select vehicle</option>";
     $exe = mysqli_query($conn, $qry);
     while ($row = mysqli_fetch_array($exe)) {

     ?>
   <option value=''>Select vehicle</option>";

   <?php foreach ($row as $row) {


          ?>
   <option value="<?php echo $row['id']; ?>"><?php echo $row['owner_vehicle_name']; ?></option>
   <?php }
     } ?>