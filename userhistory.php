<?php
session_start();
error_reporting(0);
$con=mysqli_connect("localhost","root","","mutualfund");

$userprofile=$_SESSION['user_name'];

?>

<!DOCTYPE html>
<html>
<head>
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
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2><?php echo  $_SESSION['user_name']." See you investments history";?></h2>

<table>
  <tr>
    <th>Name of the scheme</th>
    <th>No of copies</th>
    <th>Total Cost</th>
    
  </tr>
  <tr>
    <td><?php echo $rows['copy']?></td>
    <td><?php echo $rows['copy']?></td>
    <td><?php echo $rows['copy']?></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table>

</body>
</html>