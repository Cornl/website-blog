<!DOCTYPE html>
<?php session_start(); ?>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			require("config.php");
			require("functions.php");
			
			checklogin();
			checkadmin();
			$_SESSION['destination']="adminpanel.php";
		?>

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
        <br><br><br><br><br><br>
		<form name="form_post" method="post" action="post.php">
			<b>title</b>
			<input name="title" type="text" id="title">
			<br>
			<b>body</b>
			<input name="body" type="textarea" id="body">
			<br>
			<input name="submit" type="submit" value="Submit">
		</form>
		<div id="wrap"></div>	
	</body>
</html>