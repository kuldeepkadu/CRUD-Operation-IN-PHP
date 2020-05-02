<?php 
	include("dbconnection.php");
if(isset($_GET['submit']))
{
	$r = $_GET['roll'];
	$u = $_GET['user'];
	$p = $_GET['pass'];
	
	$usql = "UPDATE data SET name='$u' , pass='$p' WHERE roll='$r' ";
	mysqli_query($conn,$usql);

	header('location: display.php');

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>

	<script type="text/javascript">
		function validate()
		{
			alert("Data Updated Successfully");
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
		<input type="number" required name="roll" value="<?php echo $_GET['roll']; ?>"><br><br>
		Username:
		<input type="username" required name="user" value="<?php echo $_GET['name']; ?>"><br><br>
		Password :
		<input type="password" required name="pass" value="<?php echo $_GET['pass']; ?>"><br><br>

		<input type="submit" required name="submit">
		</div>
	</form>

</body>
</html>


