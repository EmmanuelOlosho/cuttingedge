<?php 
	$con = mysqli_connect("localhost", "root", "", "cuttingedge");
	if (mysqli_connect_error()){
	echo "fail to connect to Mysqli" . mysqli_connect_error($con); 
	}
?>