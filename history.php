<?php
session_start();
error_reporting(0);
$con=mysqli_connect("localhost","root","","mutualfund");

$userprofile=$_SESSION['user_name'];
$query="select * from buy where username='$userprofile'";
$result=mysqli_query($con,$query);

?>
<html>
<head><title>profile</title>
    <link rel="stylesheet" type="text/css" href="userprofile.css">
<style>


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dcf8ec;
}
    </style>
</head>
<body>

<table>
		<caption>See your Investments History</caption>
    <tr>
    <th>Name of the scheme</th>
    <th>No of copies</th>
    <th>Total Cost</th>
    </tr> 	
<?php while($rows=mysqli_fetch_assoc($result)) 
{
?>
<tr>
<td><?php echo $rows['schemename']?></td>
    <td><?php echo $rows['copy']?></td>
    <td><?php echo $rows['cost']?></td>
  </tr>      
 <?php
}
?>

</table>
</body>
</html>

		

