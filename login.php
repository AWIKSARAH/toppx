<?php
include("connection.php");
session_start();
if(isset($_POST['login']))
{
	//amateur
	if(isset($_POST['user'])and isset($_POST['pass']))
	{
		$u=$_POST['user'];
		$p=$_POST['pass'];
		$sql ="Select * from amateur where user='$u' and pass ='$p'"
		$query=mysqli_query($conn,$sql);
		$result =mysqli_fetch_array($query);
		$count = mysqli_num_rows($result);
		if($count==1){
			session_register("u");//3abili l username bi2alb al session 
			$_session('userconnected')=$u//3am 3arif variable de type session
			$_session('usercode')=$result[1]//ye3ni awal row 
			header("location : amateur.html");
		}else{
		//photographe
		
		$sql ="Select * from photographe where user='$u' and pass ='$p'"
		$query=mysql_query($sql,$conn);
		$result =mysql_fetch_array($query);
		$count = mysql_num_rows($result);
		if($count==1){
			session_register("u");//3abili l username bi2alb al session 
			$_session('userconnected')=$u//3am 3arif variable de type session
			$_session('usercode')=$result[1]//ye3ni awal row 
			header("location : photographe.html");
		}else{
		//agentpress
    
		$sql ="Select * from agentpress where user='$u' and pass ='$p'"
		$query=mysql_query($sql,$conn);
		$result =mysql_fetch_array($query);
		$count = mysql_num_rows($result);
		if($count==1){
			session_register("u");//3abili l username bi2alb al session 
			$_session('userconnected')=$u//3am 3arif variable de type session
			$_session('usercode')=$result[1]//ye3ni awal row 
			header("location : agentpress.html");
		}
		else
		{
			
		//gerant
    
		$sql ="Select * from gerant where user='$u' and pass='$p'"
		$query=mysql_query($sql,$conn);
		$result =mysql_fetch_array($query);
		$count = mysql_num_rows($result);
		if($count==1){
			session_register("u");//3abili l username bi2alb al session 
			$_session('userconnected')=$u//3am 3arif variable de type session
			$_session('usercode')=$result[1]//ye3ni awal row 
			header("location : gerant.php");
		}
		else
			//compagnie
		
			$sql ="Select * from compagnie where user='$u' and pass ='$p'"
		$query=mysql_query($sql,$conn);
		$result =mysql_fetch_array($query);
		$count = mysql_num_rows($result);
		if($count==1){
			session_register("u");//3abili l username bi2alb al session 
			$_session('userconnected')=$u//3am 3arif variable de type session
			$_session('usercode')=$result[1]//ye3ni awal row 
			header("location : compagnie.html");
		}
		}
		}
		}
	}
	else {
			$error="Username or Password Are Not Valid";
		}
	}
?>

<html><head></head>
<body> <B>Please fill imfo belo</B><br>
<form action=""  methode="post">
<input type="text" name="user" placeholder="Username"/>
<input type="text" name="pwd" placeholder="Password"/>
<input type="submit" name="submit" value="SignIn"/> <br>
<?php echo $error; ?>
</form>
</body>
</html>