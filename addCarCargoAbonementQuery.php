
<?php

  $conn = new mysqli("localhost", "root", "", "cargologisticdb") or die(mysqli_error());



$cargoIds=null;
$cargoNames=null;
$driverNames=null;
$driverPhone=null;
$driverOthePhone=null;
$cargoFees=null;
$AbonementDay=null;
$totals=null;




$CarExistsexist_error=null;
$drivernames_error=null;
$phoneuser_error=null;
$userfewphonelenght_error=null;
$phoneOtheruser_error=null;
$userfewphoneOtherlenght_error=null;
$validday_error=null;
$customerIsExist=null;





?>

<?php
  if(ISSET($_POST['savecargosabonement'])){
    
    $cargoIds=$_POST['cargoId'];
    $cargoNames=$_POST['cargonames'];
    $driverNames=$_POST['drivernames'];
    $driverPhone=$_POST['driverphone'];
     $driverOthePhone=$_POST['driverotherphone'];
      $cargoFees=$_POST['cargofees'];  
     
       $AbonementDay =$_POST['abonementday'];
       $totals=$cargoFees*$AbonementDay;

     
 
 
   
     
        $t=date("Y-m-d");
        $time = date("H:i");


// $sql = "SELECT * FROM cargotb WHERE  carplate= '$carPlat'";
// $query = mysqli_query($conn, $sql);
// $row = mysqli_num_rows($query);




 
// if ($row>0) {
// // echo " <script>window.alert(' This Students Is Already Exist ');window.location='addStudents.php'</script>";
//    $CarExistsexist_error="This Car Is Already Exist";
// // exit();
// }

        $sql = "SELECT * FROM abonement WHERE   cargoid= '$cargoIds'";
$query = mysqli_query($conn, $sql);
$row = mysqli_num_rows($query);
        


while ($data  = mysqli_fetch_array($query)) {
            
            $abonmentDays  = $data['remainday'];

          
                   } 

  
if($abonmentDays >= 1){

 $customerIsExist="Wait First Abonment Be Finished";
} 

 

elseif($AbonementDay<0) {

   $validday_error="Enter Valid Number";
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

 $conn->query("UPDATE `cargotb` SET `cargostatususe`='abonement' WHERE `cargoid` = '$cargoIds'") or die(mysqli_error());

   $conn->query("INSERT INTO `abonement`(cargoid,cargoname,drivername,driverphone,driverotherphon,cargoprice,abonementday,remainday,totalpay,doneon) VALUES('$cargoIds','$cargoNames','$driverNames','$driverPhone','$driverOthePhone','$cargoFees','$AbonementDay','$AbonementDay','$totals','$t')") or die(mysqli_error());

    echo '<script>alert("Cargo Added Successfully ");window.location=\'manageCarStatusAbonement.php\';</script>';

  }

  


}








    
?>