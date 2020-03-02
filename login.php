<?php 
session_start();
$con=mysqli_connect("localhost","root","","mutualfund");

if(isset($_POST['login']))
{
  $user=$_POST['user'];
    $pass=$_POST['pass'];
  $query="SELECT * FROM signup WHERE user='$user' && pass='$pass'";
      $data=mysqli_query($con,$query);
      $result=mysqli_num_rows($data);
      echo "$result";
      if ($result>=1){
          $_SESSION['user_name']=$user;?>
          <script>
          window.open('profile.php','_self');
        </script> 
        
        <?php 
      }
      else{
          echo "Login Failed";
      }
    }      

?>
