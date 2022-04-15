<?php
session_start();
include("includes/connection.php");
$id = $_GET['id'];
$_SESSION['id'] = $id;
if (isset($_POST['Change Passowrd'])) {
    $Password = htmlspecialchars($_POST['opwd']);
    $newpassword = htmlspecialchars($_POST['npwd']);
    $update_qry = "UPDATE tblbooking SET  Password='$newpassword' WHERE id=$id";
    $query_run = mysqli_query($conn, $update_qry);

    if ($query_run) {
        echo "changed";
    }
}
?>

<body class="hold-transition sidebar-mini">
    <?php
    include("includes/header.php");
    ?>
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

        <!-- <p style="color:red;"><?php echo $_SESSION['msg1']; ?><?php echo $_SESSION['msg1'] = ""; ?></p> -->

        <form class="w3-container" action="" method="post" name="login_form" id="login_form">

            <div class=" w3-section">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <?php
                $sql = "SELECT * from tblbooking where id='$id'";
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
                    <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="npwd" id="npwd"
                        required>
                </div>
                <div>
                    <label><b>Confirm Password</b></label>
                    <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="cpwd" id="cpwd"
                        required>
                </div>

                <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" value="Change Passowrd"
                    name="Change Passowrd">ChangePassword</button>
            </div>
        </form>
    </div>
</body>

</html>