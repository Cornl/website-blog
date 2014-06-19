<!DOCTYPE html>
<?php session_start(); ?>
<html>
	<head>
		<title>home.php</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			require("config.php");
			require("functions.php");
			checklogin();

			$result=mysqli_query($con,"SELECT * FROM `posts`");
			while($row=mysqli_fetch_array($result))
			{
				echo $row['title']." ".$row['body'];
				echo "<br> <br>";
			}
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

		<a href="logout.php">Logout</a>
		<a href="adminpanel.php">Admin panel</a>
		<div id="wrap"></div>
	</body>
</html>