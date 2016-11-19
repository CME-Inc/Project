<html>
<head><title>LOGIN</title></head>
<body>
<?php

	session_start();
	
	$adminuser = $_POST['username'];
	$adminpass = $_POST['password'];
	
	if($username&&$password)
	{
		$connect = mysql_connect("localhost", "kozle1_email", "email123") or die("Connection to DB failed!");
			
			mysql_select_db("kozle1_loginMesten")or die("Connection failed!");
		
		$query = mysql_query("SELECT * FROM `admin` WHERE `adminuser` = '$adminuser'");
		
		$numrows = mysql_num_rows($query);
		
		if($numrows !==0){
			while($row = mysql_fetch_assoc($query)){
				
				$pass = md5($adminpass);
				$dbusername = $row['adminuser'];
				$dbpassword = $row['adminpass'];
				$id = $row['id'];
			}
			if($adminuser == $dbusername && ($pass)==$dbpassword){
				$_SESSION['username'] = $adminuser;
				$_SESSION['id'] = $id;
				
				header("Location: adminpanel.php");
                
			} else
				echo "Your password is incorrect!"; ?>
					
				<?php
		} else
			die("That user does not exist!");
	} else
		die("Please enter a username and password!");
?>
</html>