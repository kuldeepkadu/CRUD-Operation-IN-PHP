<?php

	include("dbconnection.php");
	$roll=$_GET['roll'];

	$query = "DELETE FROM data WHERE roll='$roll'";

	$data=mysqli_query($conn,$query);

		if($data)
		{
			header('location: display.php');

		}else {
			echo "ERROR Sorry, Delete process Failed!";
		}
?>