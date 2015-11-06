<?php
include "config.php";

$sql = "update days set status='incomplete'";
$result = mysqli_query($connect, $sql) or die('Could not reset challenge.');

if($result) {
	echo "Challenge has been successfully reset!";
}





?>