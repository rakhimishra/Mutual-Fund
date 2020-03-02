<?php
session_start();

$con=mysqli_connect("localhost","root","","mutualfund");
$userprofile=$_SESSION['user_name'];
if (isset($_POST['sbi1'])){
    $copy=$_POST['number'];
    $cost= $copy*400;
    $schemename="sbi bluechip fund";
}
if (isset($_POST['sbi2'])){
    $copy=$_POST['number'];
    $cost=$copy*4000;
    $schemename="sbi small cup fund";
}
if (isset($_POST['sbi3'])){
    $copy=$_POST['number'];
    $cost=$copy*500;
    $schemename="sbi chip fund";
}


$query="INSERT INTO `buy`(`username`, `copy`, `cost`, `schemename`) VALUES  ('$userprofile','$copy',$cost,'$schemename')";
if(mysqli_query($con,$query)){
    ?>
    <script>
        window.alert("You have successfully registered");
        window.open('buy.php','_self');
    </script>
    <?php
}
else {
    ?>
    <script>
        window.alert("You have Not successfully registered");

    </script>
    <?php
}