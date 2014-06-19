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

		<?php
			if(!isset($_GET['destination']) || $_GET['destination']=="")
			{
				$destination="home.php";
			}
			else
			{
				$destination=$_GET['destination'];
			}
			echo"<form name='form_login' method='post' action='checklogin.php?destination=".$destination."'"; ?>
			<b>username</b>
			<input name="username" type="text" id="username">
			<br>
			<b>password</b>
			<input name="password" type="text" id="password">
			<br>
			<input type="submit" name="submit" value="Login">
			<br>
			<a href="home.php"><b>Back to homepage</b></a>
			<br>
			<?php
				if(isset($_GET['error']))
				{
					echo $_GET['error'];
				}
			?>
		</form>
		<div id="wrap"></div>
	</body>
</html>