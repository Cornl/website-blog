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

			$title=mysqli_real_escape_string($con,$_POST['title']);
			$body=mysqli_real_escape_string($con,$_POST['body']);

			mysqli_query($con,"INSERT INTO `posts` (title,body) VALUES ('$title','$body')");

			header("Location: home.php");
		?>
	</body>
</html>