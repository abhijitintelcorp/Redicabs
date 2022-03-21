<?php
error_reporting(0);
include("includes/connection.php");
?>
<div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

        <div class="w3-center"><br>
            <!-- <span onclick="document.getElementById('id02').style.display='none'"
                class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            <img src="images/icons/note.png" alt="Avatar" style="width:10%" class="w3-circle w3-margin-top"> -->
        </div>
        <?php
        // echo $insert_id;
        if (isset($_POST['submit'])) {
            $insert_id = htmlspecialchars($_POST['id']);
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $contact = htmlspecialchars($_POST['contact']);
            $password = htmlspecialchars($_POST['password_id']);
            $insert_qry = "UPDATE `tblbooking` SET `UserName`='$username',`EmailId`='$email',`Password`='$password',`ContactNo`='$contact' WHERE id='$insert_id'";
            $fn_qry = mysqli_query($conn, $insert_qry);
            $sel_qry = "SELECT * FROM `tblbooking` WHERE id='$insert_id'";
            $res_qry = mysqli_query($conn, $sel_qry);
            $rows = mysqli_fetch_assoc($res_qry);
            $pickuptime = $rows['Time'];
            $JourneyDate = $rows['FromDate'];
            $pickuplocation = $rows['pickup'];
            $droplocation = $rows['dropoff'];
            $to = "$email";
            $headers = "From : info@redicabs.com";
            $subject = "Thank You For Booking";
            $message = "Thank You " . $username . "For Booking. Here is your details below";
            $message .= "Full Name: <b>" . $username . "</b>\r\n" . "Email: <b>" . $email . "</b>\r\n" . "Contact No: <b>" . $contact . "</b>\r\n" .
                "Pickup Time: <b>" . $pickuptime . "</b>\r\n" . "Journey Date: <b>" . $JourneyDate . "</b>\r\n" . "Pickup Location: <b>" . $pickuplocation . "</b>\r\n" . "Drop Off Location: " . $droplocation;
            mail($to, $subject, $message, $headers);

            if ($fn_qry) {
                $msg = "<b style='color:red;'>Mail Sent. Thank you " . $username . ", we will contact you shortly.</b>";
            } else {
                $msg = "Not Submitted";
            }
        }
        ?>
        <form class="w3-container" action="" method="post" name="signup_form" id="signup_form">

            <div class="w3-section">
                <div>
                    <label><b>Full Name</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Full Name"
                        name="username" id="username">
                    <input type="hidden" name="id" value="<?php echo $insert_id; ?>" />

                </div>
                <div>
                    <label><b>Email Address</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email Address"
                        name="email" id="email">
                </div>
                <div>
                    <label><b>Mobile Number</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="number"
                        placeholder="Enter 10digit Mobile Number" name="contact" id="contact">
                </div>
                <div>
                    <label><b>Password</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Enter Password"
                        name="password_id" id="password_id">
                </div>
                <div>
                    <label><b>Confirm Password</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="password"
                        placeholder="Enter Confirm Password" name="cpassword" id="cpassword">
                </div>
                <div>
                    <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="submit">Sign
                        Up</button>

                </div>
        </form>

        <center><span class=" w3-padding w3-hide-small">Already got an account?
                <p onclick="document.getElementById('id01').style.display='block'">Login Here</p>
            </span></center>

    </div>
</div>


<?php
ob_flush();
?>