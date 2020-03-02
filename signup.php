<?php
$con=mysqli_connect("localhost","root","","mutualfund");
if (isset($_POST['signup'])){
    $pan=$_POST['pan'];
    $user=$_POST['user'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $image=$_FILE["name"];
    $tempname=$_FILES["tmp_name"];
    $folder="customer/".$image;
    move_uploaded_file($tempname,$folder);
}
echo "$cpass";
$query="INSERT INTO `signup`(`pan`, `user`, `mobile`, `email`, `pass`, `cpass`,`image`) VALUES ('$pan','$user', ' $mobile','$email','$pass','$cpass','$folder')";
if(mysqli_query($con,$query)){
    ?>
    <script>
        window.alert("You have successfully registered");
        window.open('profile.php','_self');
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






?>