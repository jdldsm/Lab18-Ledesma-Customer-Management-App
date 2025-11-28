<?php
$conn = mysqli_connect("localhost", "root", "", "salecodb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
