 <?php
  session_start();
  include("includes/connection.php");
  ?>
 <style>
.bg {
    background-color: #1799df;
}
 </style>
 <!DOCTYPE html>
 <html lang="en">

 <body>

     <?php
    //include("includes/register.php");
    include("show_cars.php");
    // }
    ?>
     <?php
    include("includes/search-header.php");
    ?>
     <div class="bg">
         <table id="zctb" class="display table table-striped table-bordered table-hover"
             style="border: 1px solid #212529;" cellspacing="0" width="100%">
             <thead>
                 <tr>
                     <th>SlNo.</th>
                     <th>Brand</th>
                     <th>VehicleName</th>
                     <th>Price/day</th>
                     <th>ModelYear</th>
                     <th>DriverName</th>
                     <th>ContactNo</th>

                     <th>FrontImage</th>
                     <th>BackImage</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>
                 <?php
          if (isset($_POST['taxi_booking'])) {
            $SeatingCapacity = htmlspecialchars($_POST['SeatingCapacity']);

            $sql = "SELECT * FROM tblbooking WHERE SeatingCapacity LIKE '%" . $SeatingCapacity . "%'";
            $query = mysqli_query($conn, $sql);

            $si = 1;
            while ($fetch = mysqli_fetch_assoc($query)) {

          ?><tr>
                     <td><?php echo $si; ?></td>
                     <td><?php echo $fetch['owner_vehicle_brand'];  ?></td>
                     <td><?php echo $fetch['owner_vehicle_name']; ?></td>
                     <td><?php echo $fetch['PricePerDay']; ?></td>
                     <td><?php echo $fetch['ModelYear']; ?></td>
                     <td><?php echo $fetch['DriverName']; ?></td>
                     <td><?php echo $fetch['DriverMobile']; ?></td>
                     <td><img src="images/<?php echo $fetch['frontimage']; ?>" width="200" height="150" alt=""></td>
                     <td><img src="images/<?php echo $fetch['backimage']; ?>" width="200" height="150" alt=""></td>
                     <td><a href="Add_booking.php?id=<?php echo $fetch['id']; ?>">Edit</a></td>
                 </tr><?php
                  $si++;
                }

                  ?></tbody>
         </table>
     </div><?php
          }
          ?>
     <?php
  include("includes/footer.php");
  include("includes/footerlink.php");
  ?>
 </body>

 </html>
 <script>
$(document).ready(function() {
        $('#zctb').DataTable();
    }

);
 </script>