<html>
<head>
<title>Login form</title>
<link rel="stylesheet" href="">
<style>
body
{
	margin:0;
	padding:0;
	background:url("../image/background.jpg");
	background-size:cover;
	font-family:sans-serif;
}
h1
{
	color:white;
	background-color:Black;
	margin:auto;
	padding:15px;
	font-size:50px
}
.do
{
	max-width:350px;
	border-radius:20px;
	margin:auto;
	background:rgba(0,0,0,0.5);
	/*box-sizing:border-box;*/
	padding:30px;
	color:white;
	font-weight:bold;
	font-size:30px;
	margin-top:40px;
}
.do[type="submit"]:hover
{
	background:#efed40;
	border-color:blue;
	color:#262626;
}
.logout
{
	width:100px;
	height:50px;
	background:rgba(0,0,0,0.5);
	color:white;
	font-weight:bold;
	font-size:20px;
	border-radius:20px;
	position:absolute;
	top:calc(18%);
	left:calc(100% - 200px);
}
.logout[type="submit"]:hover
{
	background:#efed40;
	border-color:blue;
	color:#262626;
}
</style>

</head>
<body>


	<center><h1>*** Manager Page ***</h1></center>
	<center><br><br><br>
		<a href=""><input type="submit" name="submit" class="do" value="Pending Order"></a>
		<a href=""><input type="submit" name="submit" class="do" value="Received Order"></a><br>

	</center>
		
		<a href="../login.php"><input type="submit" name="submit" class="logout" value="Log Out"></a><br>

		

		
		


</body>
</html>