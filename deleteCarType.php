<?php 

$conn = new mysqli("localhost", "root", "", "cargologisticdb") or die(mysqli_error());

	$ID=$_GET['id'];
	$conn->query("DELETE FROM `cartypetb` WHERE `cartypeid` = '$ID'") or die(mysqli_error());
	echo '<script type="text/javascript">alert("Car Type deleted Successfully");window.location=\'viewCarType.php\';</script>';
 ?>