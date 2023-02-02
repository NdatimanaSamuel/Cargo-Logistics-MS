
<?php

  $conn = new mysqli("localhost", "root", "", "cargologisticdb") or die(mysqli_error());



$carType=null;
$carPrices=null;





$CarExistsexist_error=null;






?>

<?php
  if(ISSET($_POST['savecartype'])){
    
     $cartypeId=$_POST['cartypeIds'];
    $carType=$_POST['cartype'];
    $carPrices=$_POST['carprices'];
  
 
 
   
     
        $t=date("Y-m-d");


// $sql = "SELECT * FROM cartypetb WHERE cartype= '$carType'";
// $query = mysqli_query($conn, $sql);
// $row = mysqli_num_rows($query);




 
// if ($row>0) {
// // echo " <script>window.alert(' This Students Is Already Exist ');window.location='addStudents.php'</script>";
//    $CarExistsexist_error="This Car Type Is Already Exist";
// // exit();
// }
       // else{

   $conn->query("UPDATE `cartypetb` SET `cartype`='$carType', `carprice` = '$carPrices' WHERE `cartypeid` = '$cartypeId'") or die(mysqli_error());

    echo '<script>alert("Car Updated Added Successfully ");window.location=\'viewCarType.php\';</script>';

  // }

  


}

?>