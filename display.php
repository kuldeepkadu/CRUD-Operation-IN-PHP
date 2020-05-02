



<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body align="center">
	<p><b>Student Record</b></p>
	<table align="center" height="80px" border="3" style="font-size: 30px;">
		
		<?php
			include("dbconnection.php");

			$sql = "select * from data";

			$disp = mysqli_query($conn,$sql);  // All data stored
			$t = mysqli_num_rows($disp);       //counts the number of data rows
			echo "<p>Total No of Rows : " .$t . "</p>";

			echo "<tr><th>&nbsp;ID</th><th>USER NAME</th><th>PASSWORD</th><th>Delete</th><th>Update</th></tr>";

			$i=1;
			while($row = mysqli_fetch_array($disp,MYSQLI_ASSOC)) {
					
					echo "</td><td>";
					echo $row['roll'];
					echo "</td><td>";
					echo $row['name'];
					echo "</td><td>";
					echo $row['pass'];
					echo "</td><td>";
					echo "<a href='delete.php?roll=$row[roll]' onclick='return checkDelete()' style='color: red;'>x</a>";
					echo "</td><td>";
					echo "<a href='edit.php?roll=$row[roll]&name=$row[name
					pass=$row[pass]'>Edit</a>";
					echo "</td></tr>";
					$i++;
			}

		?>

		<script type="text/javascript">
			
			function checkDelete()
			{
				return	confirm('Are you sure you want to delete Data?');
			}
		</script>

	</table>

</body>
</html>