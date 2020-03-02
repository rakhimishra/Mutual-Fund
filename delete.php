<?php
session_start();
$con=mysqli_connect("localhost","root","","mutualfund");
$_sESSION['current']=$_SESSION['user_name'];
$CURRENT=$_sESSION['current'];
echo "$CURRENT";
$query="DELETE FROM SIGNUP WHERE user='$CURRENT'";
if(mysqli_query($con,$query)){
    ?>
    <script>
        window.alert("You profile has successfully deleted");
        window.open('index1.html','_self');
    </script>
    <?php
}
else {
    ?>
    <script>
        window.alert("Some error occured");

    </script>
    <?php
}


?>