   <?php
   include("includes/config.php");


   $id = $_GET['id'];
   $qry = "SELECT  owner_vehicle_brand from tblbooking where id='$id'";
   $options = "<option value=''>Select brand</option>";
   $exe = mysqli_query($conn, $qry);
   while ($row = mysqli_fetch_array($exe)) {

   ?>
   <option value=''>Select brand</option>";

   <?php foreach ($row as $brand) {


      ?>
   <option value="<?php echo $row['id']; ?>"><?php echo $row['owner_vehicle_brand']; ?></option>
   <?php }
   } ?>