<?php
include "config.php";

for($i = 1, $m = 30; $i <= $m; $i++) {
	
	$sql = "INSERT INTO days (day) VALUES ('$i')";
	$result = mysqli_query($connect,$sql) or die('Could not insert values.');
}

if($result) {
		echo "All 30 days have been added to the database!";
}



?>