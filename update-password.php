<?php
session_start();
include("includes/connection.php");
$id = $_GET['id'];
$_SESSION['id'] = $id;
if (isset($_POST['submit'])) {
    $newpassword = htmlspecialchars($_POST['npwd']);
    $update_qry = "UPDATE tblbooking SET  Password='$newpassword' WHERE id=$id";
    $query_run = mysqli_query($conn, $update_qry);

    if ($query_run) {
        $msg1 = "<b style='color:green;'>Password is Updated Successfully</b>";
    } else {
        $msg1 = "<b style='color:red;'>Password is Not  Updated. Please Try Again.</b>";
    }
}
?>
<!doctype html>
<html lang="en">

<style>
.profile_nav {
    border-right: 1px solid #c5c5c5;
    padding: 20px;
    text-align: center !important;
    background-color: #0e8fd5;
    color: #ffffff !important;
}

.profile_nav ul {
    padding: 0px;
    margin: 0px;
}

.profile_nav ul li {
    list-style: none;
}

.profile_nav ul li a {
    color: #ffffff !important;
    font-size: 15px;
    font-weight: 900;
}

.profile_nav ul li.active a,
.profile_nav ul li a:hover {
    color: #fa2837;
}
</style>

<body class="hold-transition sidebar-mini">
    <?php
    include("includes/header.php");
    ?>

    <div class="container" id="booknow">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 mybooking2">
                <div class="col-sm-12">
                    <h2 class=" uppercase underline">Update Password</h2>
                    <hr width="100%" height="5px">
                </div>

            </div>

            <div class="col-sm-8">
                <?php echo $msg1; ?>
                <form class="w3-container" action="" method="post" name="booking" id="booking">

                    <div class=" w3-section">

                        <?php
                        $sql = "SELECT * from tblbooking where id=$id";
                        $query = mysqli_query($conn, $sql);
                        $results = mysqli_fetch_assoc($query);
                        ?>
                        <div>
                            <label><b>Old Password</b></label>
                            <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Enter email"
                                name="opwd" id="opwd" value="<?php echo $results['Password']; ?>" required>
                        </div>
                        <div>
                            <label><b>New Password</b></label>
                            <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="npwd"
                                id="npwd" required>
                        </div>
                        <div>
                            <label><b>Confirm Password</b></label>
                            <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="cpwd"
                                id="cpwd" required>
                        </div>

                        <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit"
                            value="Change Passowrd" name="submit">Change Password</button>
                    </div>
                </form>
            </div>

            <div class="col-sm-4">
                <div class="profile_nav">
                    <ul>
                        <li><a href="profile.php?id=<?php echo $id; ?>">Profile Settings</a></li>
                        <hr>
                        <li><a href="update-password.php?id=<?php echo $id; ?>">Update Password</a></li>
                        <hr>
                        <li><a href="my_booking.php?id=<?php echo $id; ?>">My Booking</a></li>
                        <hr>
                        <li><a href="logout.php">Sign Out</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <?php
    include("includes/footer.php");
    include("includes/footerlink.php");
    ?>
</body>

</html>