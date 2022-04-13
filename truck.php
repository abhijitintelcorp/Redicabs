<?php
session_start();
include("includes/connection.php");

?>
<!DOCTYPE html>
<html lang="en">


<body class="hold-transition sidebar-mini">
    <?php
    include("includes/header.php");
    ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-6" style="margin-bottom: 14px;margin-top: 5%;">
                <?php

                $sql = "SELECT * from tblbooking  where Categories='Truck' and Status = 3 ";
                $query = mysqli_query($conn, $sql);
                //$results = mysqli_fetch_assoc($query);
                //$count = mysqli_num_rows($query);
                //$cnt = 1;
                //if ($count > 0) {
                while ($results = mysqli_fetch_assoc($query)) {
                ?>
                <div class="row" style="margin-bottom: 14px;margin-top: 22px; border:1px solid #0d4555;">
                    <div class="col-lg-6">
                        <div class="text-center"> <img src="images/<?php echo $results['frontimage']; ?>" width="100%"
                                height="80%" style="margin-top:30px;" /> </div>
                    </div>
                    <div class="col-lg-6 product">
                        <div class="mt-4 mb-3">
                            <h3> Vehicle name : <?php echo $results['owner_vehicle_name']; ?>
                            </h3>

                            <h6>Vehicle Type: <?php echo $results['Categories']; ?></h6>
                            <h6>Brand Name: <?php echo $results['owner_vehicle_brand']; ?></h6>
                            <h6>Seating Capacity : <?php echo $results['SeatingCapacity']; ?></h6>
                            <h6> <span>Price: Rs<?php echo $results['PricePerDay']; ?>/-</span></h6>

                        </div>

                        <div class="cart mt-4 align-items-center">
                            <a href="index.php" class="btn btn-primary" name="submit" type="submit">Book Now</a>

                        </div>

                    </div>
                </div>
                <?php
                }
                // }
                ?>


            </div>
        </div><br><br><br>
    </div>
    <?php
    include("includes/footer.php");
    include("includes/footerlink.php");
    ?>
</body>

</html>