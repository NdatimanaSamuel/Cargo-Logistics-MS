
<?php

  $conn = new mysqli("localhost", "root", "", "cargologisticdb") or die(mysqli_error());



$cargoCode=null;
$driverNames=null;
$carTypes=null;
$carPlat=null;
$driverPhone=null;
$driverOthePhone=null;




$CarExistsexist_error=null;
$drivernames_error=null;
$phoneuser_error=null;
$userfewphonelenght_error=null;
$phoneOtheruser_error=null;
$userfewphoneOtherlenght_error=null;





?>

<?php
  if(ISSET($_POST['savecargo'])){
    
    $cargoCode=$_POST['cargcode'];
    $driverNames=$_POST['drivernames'];
    $carTypes=$_POST['cartypes'];
    $carPlat=$_POST['carplat'];
    $driverPhone=$_POST['driverphon'];
     $driverOthePhone=$_POST['driverothephon'];
 
 
   
     
        $t=date("Y-m-d");


$sql = "SELECT * FROM cargotb WHERE  carplate= '$carPlat'";
$query = mysqli_query($conn, $sql);
$row = mysqli_num_rows($query);




 
if ($row>0) {
// echo " <script>window.alert(' This Students Is Already Exist ');window.location='addStudents.php'</script>";
   $CarExistsexist_error="This Car Is Already Exist";
// exit();
}
elseif (!preg_match("/^[a-zA-Z\s]+$/",$driverNames)) {
  # code...
   $drivernames_error="Driver Names Must Be Character";
}

//about dad phone 
 elseif (!preg_match('/^[0-9]*$/',$driverPhone)) {
    $phoneuser_error="Only Mobile Number";
 }


 elseif (strlen($driverPhone)<10) {
    $userfewphonelenght_error="Enter Proper Mobile Number";
 }


 elseif (!preg_match('/^[0-9]*$/',$driverOthePhone)) {
    $phoneOtheruser_error="Only Mobile Number";
 }


 elseif (strlen($driverOthePhone)<10) {
    $userfewphoneOtherlenght_error="Enter Proper Mobile Number";
 }

       else{


   $conn->query("INSERT INTO `cargotb`(carcode,drivernames,cartype,carplate,driverphone,driverotherphone,cargostatususe,doneon) VALUES('$cargoCode','$driverNames','$carTypes','$carPlat','$driverPhone','$driverOthePhone','none','$t')") or die(mysqli_error());

    echo '<script>alert("Car Added Successfully ");window.location=\'addCargo.php\';</script>';

  }

  


}








    
?>