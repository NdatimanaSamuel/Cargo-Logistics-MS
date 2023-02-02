
<?php
 $username=null;
  $password=null;
  $checkaccount_error=null;

    session_start();
    if(ISSET($_POST['userlogin'])){

        $username = $_POST['username'];
        $password = $_POST['pass'];

        $conn = new mysqli("localhost", "root", "", "cargologisticdb") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `admintb` WHERE `adminemail` = '$username' && `adminpass` = '$password'") or die(mysqli_error());
        $fetch = $query->fetch_array();
        $valid = $query->num_rows;
        // $section = $fetch['staffrole'];   

            if($valid > 0){
               
                    $_SESSION['adminid'] = $fetch['adminid'];
                     $_SESSION['adminname'] = $fetch['adminname'];
                     
                    header("location:homeManager.php");
                
              
                // if($section == "Animation"){
                //      $_SESSION['staffnames'] = $fetch['staffnames'];
                //     $_SESSION['staffid'] = $fetch['staffid'];
                //     header("location:templates/Animation/homeAnimation.php");
                // }
              
            }else{
                 $checkaccount_error="Account Does Not Exist Try Again!";
                // echo "<script>alert('Account Does Not Exist!')</script>";
                // echo "<script>window.location = 'index.php'</script>";
            }
                        
        
        }
       
    


?>
