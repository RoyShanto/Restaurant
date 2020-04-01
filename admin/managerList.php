<?php
	require "../db/db_connect.php";
	require "adminPage.php";
?>

<html>
<link rel="stylesheet" href="">
	<body>
		<table border="2" align="center" width="200px" height="200" bgcolor="#B7B0B0">
			 
				<tr align="center" bgcolor="#00FFFFFF">
				<td colspan=10>Manager List</td>
				
				</tr> 
				
			    <tr align="center">
			<td>Id</td>
			<td>Name</td>
			<td>Email</td>
			<td>Password</td>
			<td>Date-Of-Birth</td>
			<td>Phone-No</td>
			<td>Address</td>
			<td>Gender</td>
			<td>Work-Experience</td>
		</tr>
			<?php
				$query="SELECT * FROM manager";
				$result=get($query);
				
				foreach($result as $r)
				{
					echo "<tr align='center'>";
					echo "<td>".$r["id"]."</td>";
					echo "<td>".$r["name"]."</td>";
					echo "<td>".$r["email"]."</td>";
					echo "<td>".$r["password"]."</td>";
					echo "<td>".$r["date_of_birth"]."</td>";
					echo "<td>".$r["phone_no"]."</td>";
					echo "<td>".$r["address"]."</td>";
					echo "<td>".$r["gender"]."</td>";
					echo "<td>".$r["work_experience"]."</td>";
					echo "</tr>";
				}
			
			?>
		</table>
	</body>
</html>