
<?php

  $conn = new mysqli("localhost", "root", "", "cargologisticdb") or die(mysqli_error());




$driverNames=null;
$carTypes=null;
$carPlat=null;
$driverPhone=null;
$driverOthePhone=null;
$cargoIds=null;
$carstatuSS=null;




$drivernames_error=null;
$phoneuser_error=null;
$userfewphonelenght_error=null;
$phoneOtheruser_error=null;
$userfewphoneOtherlenght_error=null;
$customerIsExist=null;





?>

<?php
  if(ISSET($_POST['savecargo'])){
    
     $cargoIds=$_POST['cargoId'];
    $driverNames=$_POST['drivernames'];
    $carTypes=$_POST['cartypes'];
    $carPlat=$_POST['carplat'];
    $driverPhone=$_POST['driverphon'];
     $carstatuSS=$_POST['carstatuss'];
     $driverOthePhone=$_POST['driverothephon'];
 
 
   
     
        // $t=date("Y-m-d");

$sql = "SELECT * FROM abonement WHERE   cargoid= '$cargoIds'";
$query = mysqli_query($conn, $sql);
$row = mysqli_num_rows($query);
        


while ($data  = mysqli_fetch_array($query)) {
            
            $abonmentDays  = $data['remainday'];

          
                   } 

  
if($abonmentDays >= 1){

 $customerIsExist="Wait Abonment Be Finished";
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


   $conn->query("UPDATE `cargotb` SET `drivernames`='$driverNames', `cartype` = '$carTypes',`carplate` = '$carPlat', `driverphone` = '$driverPhone',`driverotherphone`='$driverOthePhone',`cargostatususe`='$carstatuSS' WHERE `cargoid` = '$cargoIds'") or die(mysqli_error());

    echo '<script>alert("Car Updated Successfully ");window.location=\'viewCar.php\';</script>';

  }

  


}








    
?>