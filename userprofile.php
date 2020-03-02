<?php
$con=mysqli_connect("localhost","root","","mutualfund");
$query="select * from signup where user='user'";
$result=mysqli_query($con,$query);

?>
<html>
<head><title>profile</title>
	<link rel="stylesheet" type="text/css" href="userprofile.css">
</head>
<body>

<table>
		<caption>User Profile</caption>
	
<?php while($rows=mysqli_fetch_assoc($result)) 
{
?>		
	<tr>
		<th>Last Name</th>
		 <td><img src=" $rows['pic']";/> </td> 
	</tr>
	<tr><th>First Name</th>
		<td><?php echo $rows['sid2'];?></td>
	</tr>
	<tr>
		<th>Last Name</th>
		<td><?php echo $rows['lname'];?></td>
	</tr>
	<tr>
		<th>Acadaemic Year</th>
		<td><?php echo $rows['academic_year'];?></td>
	</tr>
	<tr>
		<th>Enrolment No</th>
		<td><?php echo $rows['enrollment_no'];?></td>
	</tr>
	<tr>
		<th>Faculty</th>
		<td><?php echo $rows['faculty'];?></td>
	</tr>
	<tr>
		<th>Department</th>
		<td><?php echo $rows['department'];?></td>
	</tr>
	<tr>
		<th>Semester</th>
		<td><?php echo $rows['sem'];?></td>
	</tr>
	<tr>
		<th>E-mail</th>
		<td><?php echo $rows['username'];?></td>
	</tr>
	<tr>
		<th>Password</th>
		<td><?php echo $rows['password'];?></td>
	</tr>
	<tr>
		<th>Security Question</th>
		<td><?php echo $rows['securityquestion'];?></td>
	</tr>
	<tr>
		<th>Answer</th>
		<td><?php echo $rows['answer'];?></td>
	</tr>
<?php
}
?>

</table>
</body>
</html>

		

