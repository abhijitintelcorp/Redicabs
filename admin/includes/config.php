<?php

$conn = mysqli_connect("localhost", "root", "", "redicabs");
if (!$conn) {
    die("Error: Failed to connect to database!");
}