<?php
error_reporting(0);
include("includes/connection.php");
?>
<div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

        <div class="w3-center"><br>
            <span onclick="document.getElementById('id03').style.display='none'"
                class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>

        </div>

        <form class="w3-container" action="" method="post" name="signup_form" id="signup_form">

            <div class="w3-section">

                <div class="card-body" style="padding: 0px">

                    <table id="zctb" class="display table table-striped table-bordered table-hover"
                        style="border: 1px solid #212529;" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SlNo.</th>
                                <th>Brand</th>
                                <th>VehicleName</th>
                                <th>FrontImage</th>
                                <th>BackImage</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                        if (isset($_POST['SeatingCapacity'])) {
                            $SeatingCapacity = $_POST['SeatingCapacity'];
                            $cnt = 1;
                            $query = mysqli_query($conn, "SELECT * FROM `tblbooking`WHERE SeatingCapacity=$SeatingCapacity");
                            $fetch = mysqli_fetch_array($query);
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo htmlentities($cnt); ?></td>
                                <td><?php echo $fetch['owner_vehicle_brand'];  ?></td>
                                <td><?php echo htmlentities($fetch['owner_vehicle_name']); ?>
                                </td>

                                <td><img src="images/<?php echo $fetch['frontimage']; ?>" width="30" height="30" alt="">
                                </td>

                                <td><img src="images/<?php echo $fetch['backimage']; ?>" width="30" height="30" alt="">
                                </td>
                                <td><a href="add-booking.php?id=<?php echo $fetch['id']; ?>">
                                        Edit</a>

                                </td>

                            </tr>
                            <?php $cnt++;
                        }
                            ?>
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </form>


    </div>
</div>


<?php
ob_flush();
?>