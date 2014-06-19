<!DOCTYPE html>
<?php session_start(); ?>
<html>
	<head>
		<title>login.php</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<form name="form_login" method="post" action="checklogin.php">
			<b>username</b>
			<input name="username" type="text" id="username">
			<br>
			<b>password</b>
			<input name="password" type="text" id="password">
			<br>
			<input type="submit" name="submit" value="Login">
			<br>
			<?php
				if (isset($_SESSION['error']))
				{
					echo $_SESSION['error'];
					$_SESSION['error']="";
				}
			?>
		</form>
	</body>
</html>