<?php

$conn = mysqli_connect("localhost", "root", "", "redicab");
if (!$conn) {
    die("Error: Failed to connect to database!");
}