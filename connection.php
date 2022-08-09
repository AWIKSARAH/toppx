<?php 
	$conn=mysqli_connect("localhost","root","","toppx");
	
	if(!$conn)
	{
		die("could not connect.m".mysqli_error($conn));
	}
?>