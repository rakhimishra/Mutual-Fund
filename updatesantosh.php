<?php
session_start();
$con=mysqli_connect("localhost","root","","mutualfund");
$_SESSION['current']=$_SESSION['user_name'];
$CURRENT=$_SESSION['current'];
echo "$CURRENT";
$pan=$_POST['pan'];
$user=$_POST['user'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];

$sql="UPDATE `signup` SET `pan`='$pan',`user`='$user',`mobile`='$mobile',`email`='$email',`pass`='$pass',`cpass`= '$cpass' WHERE user like '$CURRENT'";

if(mysqli_query($con,$sql)) {
  	?>

         <script> alert('you are Successfully UPDATED') ;
        
         </script>;
        <?php  
           header('location:profile.php');
         }
       else
       {
       	echo "database not connectd";
       }
?>

