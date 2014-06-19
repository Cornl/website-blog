<!DOCTYPE html>
<?php session_start(); ?>
<html>
	<head>
		<title>login.php</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<nav id="nav">
            <ul id="nav_ul">
                <li class="nav_li">
                    <a href="../website" class="nav_a">Website</a>
                </li>
                <li class="nav_li">
                    <a href="#" class="nav_a">Blog</a>
                    <span id="nav_span"></span>
                </li>
            </ul>
        </nav>

        <br>
        <br>
        <br>
        <br>

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
		<div id="wrap"></div>
	</body>
</html>