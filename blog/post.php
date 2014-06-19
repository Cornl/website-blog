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

			$title=$_POST['title'];
			$body=$_POST['body'];

			mysqli_query($con,"INSERT INTO `posts` (title,body) VALUES ('$title','$body')");

			header("Location: home.php");
		?>
	</body>
</html>