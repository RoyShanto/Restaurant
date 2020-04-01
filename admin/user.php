<html>
<head></head>
<?php
	require "adminPage.php";
	require "../db/db_connect.php";
?>
<body><br><br><br>
<table border="2" align="left" width="50%" height="180px" bgcolor="#B7B0B0" >	 
	<tr align="center" bgcolor="#00FFFFFF">
		<td colspan=10>Customer List</td>		
	</tr> 			
	<tr align="center">
		<td>Id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Password</td>
		<td>Phone-No</td>
		<td>Gender</td>
		<td>Address</td>
	</tr>
<?php
	$query="SELECT * FROM customer";
	$result=get($query);
		
	foreach($result as $r)
	{
		echo "<tr align='center'>";
		echo "<td>".$r["id"]."</td>";
		echo "<td>".$r["name"]."</td>";
		echo "<td>".$r["email"]."</td>";
		echo "<td>".$r["password"]."</td>";
		echo "<td>".$r["phone no"]."</td>";
		echo "<td>".$r["gender"]."</td>";
		echo "<td>".$r["address"]."</td>";
		echo "</tr>";
	}
			
?>
</table>
<table border="2" align="right" width="45%" height="180px" bgcolor="#B7B0B0" >	 
	<tr align="center" bgcolor="#00FFFFFF">
		<td colspan=10>Order List</td>		
	</tr> 			
	<tr align="center">
		<td>Id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Phone-No</td>
		<td>Address</td>
	</tr>
<?php
	$query="SELECT * FROM customer";
	$result=get($query);
		
	foreach($result as $r)
	{
		echo "<tr align='center'>";
		echo "<td>".$r["id"]."</td>";
		echo "<td>".$r["name"]."</td>";
		echo "<td>".$r["email"]."</td>";
		echo "<td>".$r["phone no"]."</td>";
		echo "<td>".$r["address"]."</td>";
		echo "</tr>";
	}
			
?>
</table>


</body>
</html>