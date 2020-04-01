<html>
	<head>
	<link rel="stylesheet" href="../css/managerStyle.css">
	</head>
	<body>
	<?php
	// require "adminPage.php";
		$err_foodid="";
		$foodid="";
		$err_name="";
		$name="";
		if(isset($_POST['Remove']))
		{
			if (empty($_POST['foodid']))
			{
				$err_foodid="*Food Id Required";
			}
			else
			{
				$foodid=$_POST['foodid'];
				//echo $foodid."<br>";
			}
		
			if(empty($_POST['name']))
			{
				$err_name="*Food Name Required";
			}
			else
			{			
				//$name=htmlspecialchars($_POST['name']);
				$name=$_POST['name'];
				echo $name ."<br>" ;
			}

		}
	?>
		<div class="registrationBox">
			<h1>Remove Food</h1>
			<form method="post" action="">
			<center>
				<table>
					<tr>
						<td><p>Food id:</p></td>
						<td><input type="text" name="foodid" placeholder="Enter Food Id" value="<?php echo $foodid;?>">
						<br><span style="color:red"><?php echo $err_foodid;?></span></td>
						
					</tr>
					<tr>
						<td><p>Food Name:</p></td>
						<td><input type="text" placeholder="Enter Food Name" value="<?php echo $name;?>" name="name" >
							<br><span style="color:red"><?php echo $err_name;?></span></td> 
						
					</tr>
					
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="Remove" value="Remove">
						</td>
					</tr>	
				</table>
			</center>				
			</form>
		</div>
	</body>
</html>