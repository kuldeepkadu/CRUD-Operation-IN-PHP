<?php

conn$ = mysqli_connect("localhost","root","");  

if(!$conn)
{
	echo "Could Not Connect :" . mysqli_error();
}
else{
	echo "Successfully Connected";
}

mysqli_select_db($conn,"wt");
?>