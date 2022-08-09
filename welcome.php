<?php 
include ("connection.php");
sssion_start();
?>
<html>
<head><title> Home</title></head>
<h1>Welcome <?php echo $_session['userconnected'];?></h1>
<h2><a href="logout.php"></h2>
</html>