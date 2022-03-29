<?php
session_start();
error_reporting(0);

include("includes/connection.php");
//$id = $_GET['id'];
// $query = "SELECT * from tblbooking where tblbooking.id='$id'";
// $query_run = mysqli_query($conn, $query);
// $rows = mysqli_fetch_array($query_run);

function dateDiff($FromDate, $ToDate)
{
    $date1_ts = strtotime($FromDate);
    $date2_ts = strtotime($ToDate);
    $si = 1;
    $diff = $date2_ts - $date1_ts;
    return round($diff / 86400) + 1;
}

if (isset($_POST['submit'])) {

    $bookingno = mt_rand(100000000, 999999999);
    $status = 0;
    $UserName = htmlspecialchars($_POST['UserName']);
    $ContactNo = htmlspecialchars($_POST['ContactNo']);
    $EmailId = htmlspecialchars($_POST['EmailId']);

    // $Time = htmlspecialchars($_POST['Time']);
    // $pickup = htmlspecialchars($_POST['pickup']);
    // $dropoff = htmlspecialchars($_POST['dropoff']);

    $update_qry = "UPDATE tblbooking SET UserName='$UserName',
    ContactNo ='$ContactNo',EmailId='$EmailId',owner_vehicle_name='$VehicleName',
    FromDate='$FromDate',ToDate='$ToDate',Time='$Time', pickup='$pickup',BookingNumber='$bookingno',
      dropoff='$dropoff' WHERE id='$id'";

    $query_run = mysqli_query($conn, $update_qry);
    if ($query_run) {
        header("location:Booking-details.php");
    }
}

?>
<style>
/*  listings section  */
.listings {
    padding: 100px 0;
}

.listings ul.properties_list {
    list-style: none;
    overflow: hidden;
}

.listings ul.properties_list li {
    display: block;
    width: 340px;
    height: auto;
    position: relative;
    float: left;
    margin: 0 40px 40px 0;
}

.listings ul.properties_list li img.property_img {
    width: 100%;
    height: auto !important;
    vertical-align: top;
}


.listings ul.properties_list li .price {
    position: absolute;
    top: 10px;
    left: 10px;
    padding: 15px 20px;
    background: #ffffff;
    color: #514d4d;
    font-family: "lato-bold", Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: bold;
    letter-spacing: 1px;

    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -o-border-radius: 2px;
}


.listings ul.properties_list li:nth-child(3n+0) {
    margin-right: 0;
}

.listings ul li .property_details {
    width: 298px;
    padding: 10px 20px 14px 20px;
    border-bottom: 1px solid #f2f1f1;
    border-left: 1px solid #f2f1f1;
    border-right: 1px solid #f2f1f1;

    transition: all .2s linear;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -o-transition: all .2s linear;
}

.listings ul li:hover .property_details {
    border-bottom: 1px solid #95badf;
    border-left: 1px solid #95badf;
    border-right: 1px solid #95badf;
}

.listings ul li .property_details h1 {
    color: #666464;
    font-family: "lato-bold", Helvetica, Arial, sans-serif;
    font-size: 16px !important;
    font-weight: bold;
    margin-bottom: 5px;
    line-height: 28px;
}

.listings ul li .property_details h1 a {
    text-decoration: none;
    color: #666464;
}

.listings ul li .property_details h2 {
    color: #9d9d9d;
    font-family: "lato-regular", Helvetica, Arial, sans-serif;
    font-size: 12px;
    line-height: 26px;
}

.listings ul li .property_details .property_size {
    color: #676767;
}

.listings .more_listing {
    display: block;
    width: 100%;
    text-align: center;
    margin: 84px 0 22px 0;
}

.listings .more_listing_btn {
    text-decoration: none;
    padding: 20px 40px;
    border: 2px solid #bfd9f1;
    border-radius: 30px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -o-border-radius: 30px;
    color: #afcbe6;
    font-family: "lato-regular", Helvetica, Arial, sans-serif;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;

    transition: all .2s linear;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -o-transition: all .2s linear;
}

.listings .more_listing_btn:hover {
    color: #a0c3e5;
    border: 2px solid #a0c3e5;
}
</style>
<!doctype html>
<html lang="en">

<body class="hold-transition sidebar-mini">
    <?php
    //include("includes/search-header.php");
    ?>

    <section class="listings">
        <div class="wrapper">
            <ul class="properties_list">
                <?php
                include("includes/connection.php");
                $sel = "SELECT * FROM tblbooking WHERE id = '$_GET[id]'";
                $rs = $conn->query($sel);
                $rws = $rs->fetch_assoc();
                ?>
                <li>
                    <a href="book_car.php?id=<?php echo $rws['id'] ?>">
                        <img class="thumb" src="images/<?php echo $rws['frontimage']; ?>" width="300" height="200">
                    </a>
                    <div class="property_details">
                        <!-- <h1>
                            <a
                                href="book_car.php?id=<?php echo $rws['id'] ?>"><?php echo 'Car Make>' . $rws['car_type']; ?></a>
                        </h1> -->
                        <h2>Car Name/Model: <span class="property_size"><?php echo $rws['owner_vehicle_name']; ?></span>
                        </h2>
                        <h2>PricePerDay: <span class="property_size"><?php echo $rws['PricePerDay']; ?></span></h2>
                        <h2>PickupPlace: <span class="property_size"><?php echo $rws['pickup']; ?></span></h2>
                        <h2>DropOffPlace: <span class="property_size"><?php echo $rws['dropoff']; ?></span></h2>
                    </div>
                </li>
            </ul>
        </div>
        <form action="#" class="booking-form-two" method="post">
            <div style="background-color: black">
                <h3 class="form-block-title" style="font-size: 30px;color: #f7eded;background-color: #1886bb;">Select
                    User Information</h3>
            </div>
            <div class="row">
                <input type="hidden" name="id" value="<?php echo $rws['id']; ?>">

                <div class="col-lg-10">
                    <div class="input-holder">
                        <input type="text" name="UserName" placeholder="Your name" style="height: 40px;
    width: 200px;" pattern="[a-z]{1,15}" title="Username should only contain lowercase letters. e.g. john" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-holder">
                        <input type="number" name="ContactNo" placeholder="contactnumber" style="height: 40px;
    width: 200px;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-holder">
                        <input type="text" style="height: 40px;
    width: 200px;" name="EmailId" title="Contact's email (format: xxx@xxx.xxx)"
                            pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*"
                            placeholder="Email address">
                    </div>
                </div>

            </div>
            <ul class="special-checkbox">
                <li>
                    <span class="input-checker">
                        <input type="checkbox" name="apt_vehicle_services_needed" value="">
                    </span>By using this form you agree to our terms & conditions.
                </li>
            </ul>
            <a href="payment.php" class="book-btn" style="background-color: #1886bb;color: black" type="submit"
                name="submit">Go To Payment</a>
        </form>
    </section>
</body>

</html>

<?php
include("includes/footerlink.php");
?>