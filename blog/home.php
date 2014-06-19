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
		<a href="logout.php">Logout</a>
		<a href="adminpanel.php">Admin panel</a>
	</body>
</html>