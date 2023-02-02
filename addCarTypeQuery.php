
<?php

  $conn = new mysqli("localhost", "root", "", "cargologisticdb") or die(mysqli_error());



$carType=null;
$carPrices=null;





$CarExistsexist_error=null;






?>

<?php
  if(ISSET($_POST['savecartype'])){
    
    $carType=$_POST['cartype'];
    $carPrices=$_POST['carprices'];
  
 
 
   
     
        $t=date("Y-m-d");


$sql = "SELECT * FROM cartypetb WHERE cartype= '$carType'";
$query = mysqli_query($conn, $sql);
$row = mysqli_num_rows($query);




 
if ($row>0) {
// echo " <script>window.alert(' This Students Is Already Exist ');window.location='addStudents.php'</script>";
   $CarExistsexist_error="This Car Type Is Already Exist";
// exit();
}
       else{


   $conn->query("INSERT INTO `cartypetb`(cartype,carprice,doneon) VALUES('$carType','$carPrices','$t')") or die(mysqli_error());

    echo '<script>alert("Car Type Added Successfully ");window.location=\'addCarType.php\';</script>';

  }

  


}








    
?>