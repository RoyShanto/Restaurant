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
		$err_pass="";
		$pass="";
		$err_cpass="";
		$cpass="";
		$err_phone="";
		$phone="";
		$err_address="";
		$address="";
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
			if (empty($_POST['pass']))
			{
				$err_pass="*Password Required";
			}
			else
			{
				$pass=$_POST['pass'];
				echo $pass."<br>";
			}
			if (empty($_POST['cpass']))
			{
				$err_cpass="*Confirm Password Required";
			}
			else
			{
				$cpass=$_POST['cpass'];
				echo $cpass."<br>";
			}
			if (empty($_POST['phone']))
			{
				$err_phone="*Phone No Required";
			}
			else
			{
				$phone=$_POST['phone'];
				echo $phone."<br>";
			}
			if(empty($_POST['address']))
			{
				$err_address="*Address required";
			}
			else
			{
				$address=$_POST['address'];
				echo $address."<br>";
			}

		}
	?>
		
			<div class="registrationBox">
			<h1>Registration</h1>
			<form method="post" action="">
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
						<td><p>Password:</p></td>
						<td> <input type="password" name="pass" placeholder="Enter Password" value="<?php echo $pass;?>">
						<br><span style="color:red"><?php echo $err_pass;?></span></td>
						
					</tr>
					<tr>
						<td><p>Confirm Password:</p></td>
						<td> <input type="password" name="cpass" placeholder="Enter Confirm Password" value="<?php echo $cpass;?>">
						<br><span style="color:red"><?php echo $err_cpass;?></span></td>
						
					</tr>
					<tr>
						<td><p>Date Of Birth: </p></td>
						<td><input type="date"></td>
					</tr>
					<tr>
						<td><p>Phone No: </p></td>
						<td><input type="text" name="phone" placeholder="Enter Phone No" value="<?php echo $address; ?>">
						<br><span style="color:red"><?php echo $err_address; ?></span></td>
					</tr>
					<tr>
						<td><p>Address: </p></td>
						<td><input type="text" name="address" placeholder="Enter Address" value="<?php echo $address; ?>">
						<br><span style="color:red"><?php echo $err_address; ?></span></td>
					</tr>
					<tr>
						<td><p>Gender: </p></td>
						<td><br><input type="radio" name="gender" value="Male"> <span class="n">Male</span> <input type="radio" name="gender" value="Female"> <span class="n">Female</span></td>
					</tr>
					
					<tr>
						<td><p>Work Experience:</p></td>
						<td><br>
							<input type="radio" name="experience"><span class="n">No Experience</span><br>
							<input type="radio" name="experience"><span class="n">Less Than 2 Year</span><br>
							<input type="radio" name="experience"><span class="n">More Than 2 Year</span><br>
							
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="submit" value="Submit">
						</td>
					</tr>	
				</table>		
			</form>
		</div>
			
		
	</body>
</html>