<html>
	<head>
	<link rel="stylesheet" href="../css/managerStyle.css">
	</head>
	<body>
	<?php
	// require "adminPage.php";
		$err_name="";
		$name="";
		$err_uname="";
		$uname="";
		$err_email="";
		$email="";
		
		if(isset($_POST['submit']))
		{
			if(empty($_POST['name']))
			{
				$err_name="*Name Required";
			}
			else
			{			
				$name=htmlspecialchars($_POST['name']);
				echo $name ."<br>" ;
			}
			
			if (empty($_POST['uname']))
			{
				$err_uname="*Usename Required";
			}
			else
			{
				$uname=$_POST['uname'];
				echo $uname."<br>";
			}
			if(empty($_POST['email']))
			{
				$err_email="*E-mail required";
			}
			else
			{
				$email=$_POST['email'];
				echo $email."<br>";
			}
			

		}
	?>
		<div class="registrationBox">
			<h1>Remove Manager</h1>
			<form method="post" action="">
			<center>
				<table>
					<tr>
						<td><p>Name:</p></td>
						<td><input type="text" placeholder="Enter Name" value="<?php echo $name;?>" name="name" >
							<br><span style="color:red"><?php echo $err_name;?></span></td> 
						
					</tr>
					<tr>
						<td><p>Username:</p></td>
						<td><input type="text" name="uname" placeholder="Enter Username" value="<?php echo $uname;?>">
						<br><span style="color:red"><?php echo $err_uname;?></span></td>
						
					</tr>
					<tr>
						<td><p>E-mail: </p></td>
						<td><input type="email" name="email" placeholder="Enter E-mail" value="<?php echo $email; ?>">
						<br><span style="color:red"><?php echo $err_email?></span></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="submit" value="Remove">
						</td>
					</tr>
				</table>	
			</center>				
			</form>
		</div>
	</body>
</html>