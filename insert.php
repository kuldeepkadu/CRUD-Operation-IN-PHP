<?php 
	include("dbconnection.php");
if(isset($_GET['submit']))
{
	$r = $_GET['roll'];
	$u = $_GET['user'];
	$p = $_GET['pass'];
	
	$sql = "INSERT INTO data VALUES ('$r','$u','$p')";
	mysqli_query($conn,$sql);

	header('location: display.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>

	<script type="text/javascript">
		function validate()
		{
			alert("Data inserted Successfully");
			return true;
		}

	</script>
	<style type="text/css">
		#p {
			height: 300px;
			width: 300px;
			border-radius: 20px;
			position: fixed;
			bottom: 40%;
			right: 36%;
			border:2px solid;
		}
		#p div {
			margin-top: 80px;
			margin-left: 40px;
		}
	</style>

</head>
<body >
	<form id="p" method="GET" onsubmit="return validate()" >
		<marquee>Student Login</marquee>
		<div>
		Roll Num:
		<input type="number" required name="roll"><br><br>
		Username:
		<input type="username" required name="user"><br><br>
		Password :
		<input type="password" required name="pass"><br><br>

		<input type="submit" required name="submit">
		</div>
	</form>

</body>
</html>



