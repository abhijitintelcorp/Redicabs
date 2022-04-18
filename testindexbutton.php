<?php
session_start();
include("includes/connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">

</script>
<script src="js/jquery.sliderPro.min.js"></script>

<body class="hold-transition sidebar-mini">
    <div class="container">
        <h2>Available Vehicles</h2>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" href="#menu1">Car</a></li></br></br>
            <li><a data-toggle="tab" href="#menu2">Lorry</a></li></br></br>
            <li><a data-toggle="tab" href="#menu3">Bus</a></li></br></br>
            <li><a data-toggle="tab" href="#menu4">Truck</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3>HOME</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>car</h3>
                <?php

                $sql = "SELECT * from tblbooking  where Categories='Car' and Status=3 ";
                $query = mysqli_query($conn, $sql);

                while ($results = mysqli_fetch_assoc($query)) {

                ?>
                <div class="col-lg-6">
                    <div class="text-center"> <img src="images/<?php echo $results['frontimage']; ?>" width="300px"
                            height="200px" style="margin-top:30px;" /> </div>
                </div>
                <?php } ?>
            </div>

            <div id="menu2" class="tab-pane fade">
                <h3>Lorry</h3>
                <?php

                $sql = "SELECT * from tblbooking  where Categories='Lorry' and Status=3 ";
                $query = mysqli_query($conn, $sql);

                while ($results = mysqli_fetch_assoc($query)) {

                ?>
                <div class="col-lg-6">
                    <div class="text-center"> <img src="images/<?php echo $results['frontimage']; ?>" width="300px"
                            height="200px" style="margin-top:30px;" /> </div>
                </div>
                <?php } ?>
            </div>

            <div id="menu3" class="tab-pane fade">
                <h3>Bus</h3>
                <?php
                $sql = "SELECT * from tblbooking  where Categories='Bus' and Status=3 ";
                $query = mysqli_query($conn, $sql);
                while ($results = mysqli_fetch_assoc($query)) {
                ?>
                <div class="col-lg-6">
                    <div class="text-center"> <img src="images/<?php echo $results['frontimage']; ?>" width="300px"
                            height="200px" style="margin-top:30px;" /> </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>