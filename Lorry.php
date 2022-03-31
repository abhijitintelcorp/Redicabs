<?php
session_start();
include("includes/connection.php");

?>
<!DOCTYPE html>
<html lang="en">


<body>
    <?php
    //include("includes/header.php");
    ?>

    <section class="section-padding gray-bg" style="padding-top: 50px;">
        <div class="container">
            <div class="section-header text-center">
                <h2>Find the Best <span><b>LorryForYou</b></span></h2>
                <p></p>
            </div>
            <div class="row">

                <!-- Nav tabs -->
                <div class="recent-tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#resentnewcar" role="tab"
                                data-toggle="tab">NewLorries</a></li>
                    </ul>
                </div>
                <!-- Recently Listed New Cars -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="resentnewcar">

                        <?php $sql = "SELECT * from tblbooking  where Categories = 'Lorry'";
                        $query = mysqli_query($conn, $sql);
                        $results = mysqli_fetch_assoc($query);
                        $count = mysqli_num_rows($query);
                        $cnt = 1;
                        if ($count > 0) {
                            while ($results = mysqli_fetch_assoc($query)) {
                        ?>
                        <div class="col-list-3">
                            <div class="recent-car-list">
                                <div class="car-info-box">
                                    <img src="images/<?php echo $results['frontimage']; ?>" class="img-responsive"
                                        alt="image" width="400px" height="400px">
                                    <ul>
                                        <li><i class="fa fa-car"
                                                aria-hidden="true"></i><?php echo $results['owner_vehicle_name']; ?>
                                        </li>
                                        <li><i class="fa fa-calendar"
                                                aria-hidden="true"></i><?php echo $results['ModelYear']; ?>
                                            Model</li>
                                        <li><i class="fa fa-user"
                                                aria-hidden="true"></i><?php echo $results['SeatingCapacity']; ?>
                                            seats</li>
                                        <li><i class="fa fa-user"
                                                aria-hidden="true"></i><?php echo $results['PricePerDay']; ?>
                                            /Day</li>
                                    </ul>
                                </div>
                                <div class="car-title-m">
                                    <h6><a href="book_now.php?id=<?php echo $results['id']; ?>">
                                            <?php echo $results['owner_vehicle_name']; ?></a></h6>

                                </div>

                            </div>
                        </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
    </section>
</body>

</html>