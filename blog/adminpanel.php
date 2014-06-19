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
		?>

		<form name="form_post" method="post" action="post.php">
			<b>title</b>
			<input name="title" type="text" id="title">
			<br>
			<b>body</b>
			<input name="body" type="textarea" id="body">
			<br>
			<input name="submit" type="submit" value="Submit">
		</form>	
	</body>
</html>