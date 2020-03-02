<?php
session_start();
error_reporting(0);
$con=mysqli_connect("localhost","root","","mutualfund");

$userprofile=$_SESSION['user_name'];
if($userprofile==true){

}
else{
    header('location:index1.html');
}
$query="SELECT * FROM signup WHERE user='$userprofile'";
$data=mysqli_query($con,$query);
$rows=mysqli_fetch_assoc($data);

?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Profile</title>
    
    
    <link rel="stylesheet" href="css1/reset.css">
	<link rel="stylesheet" href="table.css">

	
		<link rel="stylesheet" href="css1/profile.css">
		<style>
.anc1{
	color: white;
	text-align:center;
	padding-top:10px;
	width: 70px;
	height: 30px;
	background-color:rgba(36,216,171,0.85);
	border-radius:5px;
	margin:5px;
	display:inline-flex;
	font-size:20px;
	padding:center;
	text-decoration:none;
	justify-content:center;


}
.withGuru{
  			margin-left:10%;
  			margin-right:0px;
  			padding: 10px;
  			text-align:justify;

		  }
		  table{
    margin-left: auto;
    margin-right: auto;
    margin: auto;
    width: 95%;
    background-image:linear-gradient(white,lightcyan);
    border:1px solid lightcyan;
    box-sizing: border-box;
    opacity:0.4;
}
th,td,tr{
	padding: 10px;
	padding-left:2rem;
    text-align: justify;
    font-weight:550;
    opacity:0.78;

}


		
		</style>

    
    
    
  </head>

  <body  style="background-color:rgba(36,216,171,0.2);" >

    <div class="container">
  <div class="avatar-flip">
    <img src="<?php echo $rows['image'];?>" height="150" width="150">
	<img src="<?php echo $rows['image'];?>" height="150" width="150">
</div>

  <h2> <?php echo $rows['user'];?> </h2>
  <h4 style="color: red" > <?php echo $rows['email'];?> </h4>
  
  <table style="opacity:0.9;">
		<caption><?php echo "welcome ".$_SESSION['user_name'];?></caption>
	
	<tr>
		<th>pan</th>
		 <td> <?php echo $rows['pan'];?></td> 
	</tr>
	<tr>
		<th>user Name</th>
		 <td> <?php echo $rows['user'];?></td> 
	</tr>
	<tr>
		<th>mobile</th>
		 <td> <?php echo $rows['mobile'];?></td> 
	</tr>
	<tr>	<th>email</th>
		<td><?php echo $rows['email'];?></td>
	</tr>
	<tr>
		<th>password</th>
		<td><?php echo $rows['pass'];?></td>
	</tr>
	<tr>
		<th>cpass</th>
		<td><?php echo $rows['cpass'];?></td>
	</tr>
	
	

</table>
<div style="display:flex";>
<div>
<a  class="anc1"  style="background-color:black;  opacity:0.8" href="logout.php">Logout</a>
</div>
<div >
<a style="background-color: red;opacity:0.8" class="anc1" href="delete.php">Delete</a>
</div>
<div>
<a   style="background-color:green"  class="anc1" href="update.php">Update</a>
</div> 
<div >
<a class="anc1"  style="background-color:blue;opacity:0.8" href="buy.php">Buy</a>
</div>
<div >
<a class="anc1"  style="background-color:yellow;opacity:0.8" href="buy.php">Sell</a>
</div>
</div>
</div>
</div>  


</body>
</html>