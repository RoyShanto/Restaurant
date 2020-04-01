<html>
<head></head>
<?php
	require "adminPage.php";
?>

<body>
<table align="right">
	<tr>
		<td>
		
			<?php
		// require "adminPage.php";
			$err_name="";
			$name="";
			$err_price="";
			$price="";
			$image="";
			$err_image="";
			if(isset($_POST['Add']))
			{
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
				
				if (empty($_POST['price']))
				{
					$err_price="*Price Required";
				}
				else
				{
					$price=$_POST['price'];
					echo $price."<br>";
				}
				
				if (empty($_POST['image']))
				{
					$err_image="*Image Required";
				}
				else
				{
					$image=$_POST['image'];
					echo $image."<br>";
				}

			}
		?>
			<div class="registrationBox">
				<h1>Add Food</h1>
				<form method="post" action="">
				<center>
					<table>
						<tr>
							<td><p>Food Name:</p></td>
							<td><input type="text" placeholder="Enter Food Name" value="<?php echo $name;?>" name="name" >
							<br><span style="color:red"><?php echo $err_name;?></span></td> 
							
						</tr>
						<tr>
							<td><p>Price:</p></td>
							<td><input type="text" name="price" placeholder="Enter Food Price" value="<?php echo $price;?>">
							<br><span style="color:red"><?php echo $err_price;?></span></td>
							
						</tr>
						<tr>
							<td><p>Image:</p></td>
							<td><input type="text" name="image" placeholder="Enter Food Image" value="<?php echo $image;?>">
							<br><span style="color:red"><?php echo $err_image;?></span></td>
							
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="submit" name="Add" value="Add">
							</td>
						</tr>	
					</table>
				</center>				
				</form>
			</div>
		
		</td>
	</tr>
	<br><br>
	<tr>
		<td>
		
		<?php
	// require "adminPage.php";
		$err_name="";
		$name="";
		$err_price="";
		$price="";
		if(isset($_POST['Update']))
		{
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
			
			if (empty($_POST['price']))
			{
				$err_price="*Privious Price Required";
			}
			else
			{
				$price=$_POST['price'];
				echo $price."<br>";
			}
			if (empty($_POST['Updateprice']))
			{
				$err_Updateprice="*Update Price Required";
			}
			else
			{
				$price=$_POST['updateprice'];
				echo $updateprice."<br>";
			}

		}
	?>
		<div class="registrationBox">
			<h1>Update Food</h1>
			<form method="post" action="">
			<center>
				<table>
					<tr>
						<td><p>Food Name:</p></td>
						<td><input type="text" placeholder="Enter Previous Food Name" value="<?php echo $name;?>" name="name" >
							<br><span style="color:red"><?php echo $err_name;?></span></td> 
						
					</tr>
					<tr>
						<td><p>Previous Price:</p></td>
						<td><input type="text" name="price" placeholder="Enter Previous Food Price" value="<?php echo $price;?>">
						<br><span style="color:red"><?php echo $err_price;?></span></td>
					</tr>
					<tr>
						<td><p>Update Price:</p></td>
						<td><input type="text" name="price" placeholder="Enter Update Food Price" value="<?php echo $price;?>">
						<br><span style="color:red"><?php echo $err_price;?></span></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="Update" value="Update">
						</td>
					</tr>	
				</table>
			</center>				
			</form>
		</div>
		
		
		
		
		</td>
	</tr>
	<tr>
		<td><?php require "removeFood.php"; ?></td>
	</tr>
</table>
<table border="2" align="center" width="70%" height="200" bgcolor="#B7B0B0">
			 
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
				require "../db/db_connect.php";
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