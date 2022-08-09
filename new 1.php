<?php
include(connection.php);
$name=$_POST['user'];
$lname=$_POST['pass'];
if (isset($_POST['login'])){
	if ($name=="sarah" and $lname=="awik"){
	header("location : signupamateur.html");}
}
?>