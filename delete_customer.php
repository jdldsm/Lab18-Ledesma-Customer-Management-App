<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM customer WHERE cus_code = '$id'");

header("Location: customers.php");
?>
