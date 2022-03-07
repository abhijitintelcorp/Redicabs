 <?php
    include("includes/config.php");

    if ($_GET['id']) {
        $sql = "SELECT *
	FROM tblbooking 
	WHERE id='" . $_GET['id'] . "'";
        $resultSet = mysqli_query($conn, $sql);
        $empData = array();
        while ($emp = mysqli_fetch_assoc($resultSet)) {
            $empData = $emp;
        }
        echo json_encode($empData);
    } else {
        echo 0;
    }

    ?>