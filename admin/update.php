<?php
include "config.php";

$status = $_GET['status'];
$day = $_GET['day'];

$sql = "UPDATE days SET status='$status' WHERE id='$day'";
$result = mysqli_query($connect,$sql) or die('Could not update status.');


?>