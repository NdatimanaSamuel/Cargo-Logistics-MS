
<?php

  $conn = new mysqli("localhost", "root", "", "cargologisticdb") or die(mysqli_error());



$cargoIds=null;
$cargoNames=null;
$driverNames=null;
$driverPhone=null;
$driverOthePhone=null;
$cargoFees=null;
$cargoStatus=null;




$CarExistsexist_error=null;
$drivernames_error=null;
$phoneuser_error=null;
$userfewphonelenght_error=null;
$phoneOtheruser_error=null;
$userfewphoneOtherlenght_error=null;
$customerIsExist=null;





?>

<?php
  if(ISSET($_POST['savecargos'])){
    
    $cargoIds=$_POST['cargoId'];
    $cargoNames=$_POST['cargonames'];
    $driverNames=$_POST['drivernames'];
    $driverPhone=$_POST['driverphone'];
     $driverOthePhone=$_POST['driverotherphone'];
      $cargoFees=$_POST['cargofees'];  
       $cargoStatus=$_POST['cargostatus']; 

     
 
 
   
     
        $t=date("Y-m-d");
        $time = date("H:i");


        $sql = "SELECT * FROM abonement WHERE   cargoid= '$cargoIds'";
$query = mysqli_query($conn, $sql);
$row = mysqli_num_rows($query);
        


while ($data  = mysqli_fetch_array($query)) {
            
            $abonmentDays  = $data['remainday'];

          
                   } 

  
if($abonmentDays >= 1){

 $customerIsExist="Wait Taken Abonment Be Finished";
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


   $conn->query("INSERT INTO `carcargotb`(cargoid,cargoname,drivername,driverphone,driverotherphon,cargoprice,cargostat,geton,gettime,	doneon) VALUES('$cargoIds','$cargoNames','$driverNames','$driverPhone','$driverOthePhone','$cargoFees','$cargoStatus','$t','$time','$t')") or die(mysqli_error());

    echo '<script>alert("Cargo Added Successfully ");window.location=\'viewCar.php\';</script>';

  }

  


}








    
?>