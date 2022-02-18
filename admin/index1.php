<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include("includes/config.php");
?>

<head>
    <style type="text/css">
    select {

        width: 300px;

    }
    </style>
    <script src="jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#SeatingCapacity').on('change', function() {
            var id = $(this).val();
            if (id) {
                $.ajax({
                    type: 'POST',
                    url: 'ajaxFile.php',
                    data: 'id=' + id,
                    success: function(html) {
                        $('#brand').html(html);
                        $('#VehicleName').html(
                            '<option value="">Select state first</option>');
                    }
                });
            } else {
                $('#brand').html('<option value="">Select country first</option>');
                $('#VehicleName').html('<option value="">Select state first</option>');
            }
        });

        $('#brand').on('change', function() {
            var id = $(this).val();
            if (id) {
                $.ajax({
                    type: 'POST',
                    url: 'ajaxFile.php',
                    data: 'id=' + id,
                    success: function(html) {
                        $('#VehicleName').html(html);
                    }
                });
            } else {
                $('#VehicleName').html('<option value="">Select state first</option>');
            }
        });
    });
    </script>
</head>

<body>
    <center>


        <div style='margin-top:50px;'>
            <img src="http://www.coderglass.com/images/logo.png"><br>
            <h4>Varun Singh's Tech Blog</h4>
            <h2>Country, State and City dropdown box using jquery in Php.</h2>
            <br>

            <?php
            //Include database configuration file
            include("includes/config.php");

            //Get all country data
            $query = "SELECT  id, SeatingCapacity from tblbooking";
            $run_query = mysqli_query($conn, $query);
            //Count total number of rows
            $count = mysqli_num_rows($run_query);

            ?>
            <select name="SeatingCapacity" id="SeatingCapacity">
                <option value="">Select SeatingCapacity</option>
                <?php
                if ($count > 0) {
                    while ($row = mysqli_fetch_array($run_query)) {
                        $id = $row['id'];
                        $SeatingCapacity = $row['SeatingCapacity'];
                        echo "<option value='$id'>$SeatingCapacity</option>";
                    }
                } else {
                    echo '<option value="">Country not available</option>';
                }
                ?>
            </select><br><br>

            <select name="state" id="state">
                <option value="">Select country first</option>
            </select>
            <br><br>

            <select name="city" id="city">
                <option value="">Select state first</option>
            </select>
        </div>
    </center>
</body>

</html>