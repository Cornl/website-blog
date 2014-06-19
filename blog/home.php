<!DOCTYPE html>
<?php
	session_start();
	require("config.php");
	require("functions.php");
?>
<html>
	<head>
		<title>home.php</title>
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

        <div id="content">
        	<?php
				$result=mysqli_query($con,"SELECT * FROM `posts`");
				while($row=mysqli_fetch_array($result))
				{
					echo "
						<div class='post'>
							<span class='post_title'>
					";
					echo $row['title'];
					echo "
							</span>
							<br>
							<span class='post_hr'></span>
							<br>
							<span class='post_body'>
					";
					echo $row['body'];
					echo "
							</span>
						</div>
					";
				}
			?>
			<a href="logout.php">Logout</a>
			<a href="adminpanel.php">Admin panel</a>

			<span id="footer">© 2013-2014 Made by Gergály Benedek</span>
		</div>

		<div id="wrap"></div>
	</body>
</html>