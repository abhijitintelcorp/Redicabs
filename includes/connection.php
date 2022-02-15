<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "redicabs";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	echo "error";
}
		//echo "success";