<!DOCTYPE html>
<?php session_start(); ?>
<html>
	<head>
		<title>Checklogin.php</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			require("config.php");
			require("functions.php");
			sql_con_check();

			$username_escaped=mysqli_real_escape_string($con,$_POST["username"]);
			$password_escaped=mysqli_real_escape_string($con,$_POST["password"]);

			$result=mysqli_query($con,"SELECT * FROM `users` WHERE `username`='$username_escaped' AND `password`='$password_escaped'");
			if (mysqli_num_rows($result)==1)
			{
				$row=mysqli_fetch_array($result);
				$_SESSION['username']=$row['username'];
				$_SESSION['logged']=1;
				$_SESSION['admin']=$row['admin'];
				$_SESSION['error']="";
				header("Location: home.php");
			}
			else
			{
				$_SESSION['error']="Wrong username or password!";
				header("Location: login.php");
			}
		?>
	</body>
</html>