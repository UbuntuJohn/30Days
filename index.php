<!DOCTYPE html>
<html lang="en">
<head>
<title>30 Day Challenge - Move a Mile a Day!</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</head>
<body>
<p class="version">Version 1.0 by John Keenan</p>
<div class="container">
	<header>
		<h1>Move A Mile Challenge <span class="glyphicon glyphicon-flag"></span></h1>
	</header>
	<section>
		<p>That's like running exactly <strong>528</strong> American Football fields in a month!</p>
		<p class='checkComplete'>You have exactly <strong class='fbfl'>528</strong> American Football fields left to run (<span class='daysLeft'>30</span> days left)</p>
	</section>
	<img class="icon" src='images/info.png' /><br />
	<div class="instructions">
		<div class='close'><img src='images/x.png' /></div>

		<h4>Instructions</h4>
		Click each day to set it to complete.</div> <div class="reset">Start Over</div>
<?php
include "admin/config.php";

$sql = "SELECT * FROM days";
$result = mysqli_query($connect,$sql) or die('Could not select days.');
echo "<div class='columns'>";
while($row = mysqli_fetch_assoc($result)) {
	extract($row);

	if($status == 'completed') {
		echo "<p id='green' class='".$id."'>Day: ".$day." is <span class='green'>".$status."</span></p>";
	} else {
		echo "<p class='".$id."'>Day: ".$day." is ".$status."</p>";
	}
	
}
echo "</div>";
?>
</div>

</body>
</html>
