<?php
	$host="localhost";
	$user="root";
	$pass="";
	$dbase="mystore";
	
	$conn=mysqli_connect($host,$user,$pass);
	if( !$conn ){
		echo "Couldn't connect to server!";
		exit;
	}
	$db=mysqli_select_db($conn,$dbase);
		if( !$db ){
			echo " Couldn't connect to database! Please try again";
			exit;
		}	
?>