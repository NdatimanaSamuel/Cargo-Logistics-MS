<?php 

$conn = new mysqli("localhost", "root", "", "cargologisticdb") or die(mysqli_error());

	$ID=$_GET['id'];
	$conn->query("DELETE FROM `cargotb` WHERE `cargoid` = '$ID'") or die(mysqli_error());
	echo '<script type="text/javascript">alert("Car deleted Successfully");window.location=\'viewCar.php\';</script>';
 ?>