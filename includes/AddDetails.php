<?php
error_reporting(0);
include("includes/connection.php");
?>
<div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

        <div class="w3-center"><br>
            <span onclick="document.getElementById('id03').style.display='none'"
                class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            <P>Enter your details</P>
        </div>
        <?php
        // echo $insert_id;
        if (isset($_POST['submit'])) {
            // $insert_id = htmlspecialchars($_POST['id']);
            $id = $_GET['id'];
            $UserName = htmlspecialchars($_POST['UserName']);
            $EmailId = htmlspecialchars($_POST['EmailId']);
            $ContactNo = htmlspecialchars($_POST['ContactNo']);
            $Password = htmlspecialchars($_POST['Password']);
            $brand = htmlspecialchars($_POST['brand']);
            $owner_vehicle_name = htmlspecialchars($_POST['owner_vehicle_name']);
            $SeatingCapacity = htmlspecialchars($_POST['SeatingCapacity']);
            $pickup = htmlspecialchars($_POST['pickup']);
            $dropoff = htmlspecialchars($_POST['dropoff']);
            $FromDate = htmlspecialchars($_POST['FromDate']);
            $ToDate = htmlspecialchars($_POST['ToDate']);
            $Time = htmlspecialchars($_POST['Time']);
            $insert_qry = "UPDATE `tblbooking` SET `SeatingCapacity`='$SeatingCapacity',`UserName`='$UserName',
            `EmailId`='$EmailId',`Password`='$Password',`ContactNo`='$ContactNo',
            `owner_vehicle_brand`='$owner_vehicle_brand',`owner_vehicle_name`='$owner_vehicle_name',
            `pickup`='$pickup',`dropoff`='$dropoff',`FromDate`='$FromDate',`ToDate`='$ToDate',`Time`='$Time' WHERE id='$id'";
            $fn_qry = mysqli_query($conn, $insert_qry);
            if ($fn_qry) {
                //header("location:includes/AddDetails.php");
                echo "success";
            }
        }
        ?>
        <form class="w3-container" action="" method="post" name="signup_form" id="signup_form">

            <div class="w3-section">
                <?php echo $msg;
                $id = intval($_GET['id']);
                $query = "SELECT * from tblbooking where tblbooking.id='$id'";
                $query_run = mysqli_query($conn, $query);
                $rows = mysqli_fetch_array($query_run);

                ?>
                <input type="hidden" name="brand" value="<?php echo $rows['SubCategories'] ?>">
                <input type="hidden" name="owner_vehicle_name" value="<?php echo $rows['owner_vehicle_name'] ?>">
                <input type="hidden" name="SeatingCapacity" value="<?php echo $rows['SeatingCapacity'] ?>">
                <input type="hidden" name="pickup" value="<?php echo $rows['pickup'] ?>">
                <input type="hidden" name="dropoff" value="<?php echo $rows['dropoff'] ?>">
                <input type="hidden" name="FromDate" value="<?php echo $rows['FromDate'] ?>">
                <input type="hidden" name="ToDate" value="<?php echo $rows['ToDate'] ?>">
                <input type="hidden" name="Time" value="<?php echo $rows['Time'] ?>">
                <div>
                    <label><b>Full Name</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Full Name"
                        name="UserName" id="UserName">
                    <input type="hidden" name="id" />

                </div>
                <div>
                    <label><b>Email Address</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email Address"
                        name="EmailId" id="EmailId">
                </div>
                <div>
                    <label><b>Mobile Number</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="number"
                        placeholder="Enter 10digit Mobile Number" name="ContactNo" id="ContactNo">
                </div>
                <div>
                    <label><b>Password</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Enter Password"
                        name="Password" id="Password">
                </div>

                <div>
                    <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit"
                        name="submit">ShowDetails</button>

                </div>
        </form>

        <!-- <center><span class=" w3-padding w3-hide-small">Already got an account?
                <p onclick="document.getElementById('id01').style.display='block'">Login Here</p>
            </span></center> -->

    </div>
</div>


<?php
ob_flush();
?>