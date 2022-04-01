<?php
session_start();
include("includes/connection.php");

?>
<!DOCTYPE html>
<html lang="en">


<body>
    <?php
    include("includes/header.php");
    ?>

    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card" style="margin-right: 250px;">
                    <div class="row">

                        <?php $sql = "SELECT * from tblbooking  where Categories LIKE '%Car'";
                        $query = mysqli_query($conn, $sql);
                        $results = mysqli_fetch_assoc($query);
                        $count = mysqli_num_rows($query);
                        $cnt = 1;
                        if ($count > 0) {
                            while ($results = mysqli_fetch_assoc($query)) {
                        ?>
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image"
                                        src="images/<?php echo $results['frontimage']; ?>" width="350" /> </div>

                            </div>
                        </div>
                        <div class="col-md-6" id="divMsg">
                            <div class="product p-4">
                                <div class="mt-4 mb-3">
                                    <h6> Vehicle name : <?php echo $results['owner_vehicle_name']; ?>
                                    </h6>
                                    <h6>PriceperDay: <?php echo $results['PricePerDay']; ?></h6>

                                    <h6>SeatingCapacity :
                                        <?php echo $results['SeatingCapacity']; ?></h6>
                                    <h6>ModelYear :
                                        <?php echo $results['ModelYear']; ?></h6>
                                </div>
                            </div>
                            <div class="cart mt-4 align-items-center">
                                <a href="book_now.php?id=<?php echo $$results['id'] ?>" class="btn btn-primary"
                                    name="submit" type="submit"> <?php echo $results['owner_vehicle_name']; ?>Book
                                    Now</a>

                            </div>

                        </div>

                    </div>
                    <?php }
                        } ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>