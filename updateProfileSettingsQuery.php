
<?php

  $conn = new mysqli("localhost", "root", "", "cargologisticdb") or die(mysqli_error());


$adminIds=null;
$adminnNames=null;
$adminEmail=null;
$adminPass=null;
$adminTelep=null;




$placeAddedSuccess=null;




?>

<?php
  if(ISSET($_POST['updateaccount'])){

    $adminIds=$_POST['managerId'];
    $adminnNames=$_POST['namess'];
    $adminEmail=$_POST['emailuser'];
    $adminTelep=$_POST['phonenum'];
      $adminPass=$_POST['passw'];
   


    

// $sql = "SELECT * FROM placetb WHERE  placename= '$placeName'";
// $query = mysqli_query($conn, $sql);
// $row = mysqli_num_rows($query);




   $conn->query("UPDATE `admintb` SET `adminname`='$adminnNames', `adminemail` = '$adminEmail',`adminphone` = '$adminTelep', `adminpass` = '$adminPass' WHERE `adminid` = '$adminIds'") or die(mysqli_error());

    $placeAddedSuccess="Account Updated Successfully";
  

  


}

    
?>