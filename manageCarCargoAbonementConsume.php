
<?php

  $conn = new mysqli("localhost", "root", "", "cargologisticdb") or die(mysqli_error());
  $remainDuration=null;
  $ID=null;
  $remaindayError=null;
  $serviceAddedSuccess=null;
?>

<?php
 
    $ID=$_GET['id'];
    $time = date("H:i");
    $date = date("Y-m-d");
    $t=date("Y-m-d");





$sql = "SELECT * FROM abonement WHERE  cargoid= '$ID'";
$query = mysqli_query($conn, $sql);
$row = mysqli_num_rows($query);
        


while ($data  = mysqli_fetch_array($query)) {
            
           
            $remainDuration = $data['remainday'];
            $RemainDay=$remainDuration-1;
                   } 

      
  if($remainDuration < 1){

   echo " <script>window.alert(' This Abonement is Expired Ask Another ');window.location='manageCarStatusAbonementConsume.php'</script>";

exit();
    }       



         else{

$conn->query("UPDATE `abonement` SET `remainday`='$RemainDay' WHERE `cargoid` = '$ID'") or die(mysqli_error());

    $conn->query("INSERT INTO `attendencetb`(cargoid,attendedtime,attendeddate,status,doneon) VALUES('$ID','$time','$date','In','$t')") or die(mysqli_error());

     echo '<script>alert("Attended Successfully ");window.location=\'manageCarStatusAbonementConsume.php\';</script>';
   

  }

 
?>
