<?php
	require("config.php");

	function sql_con_check()
	{
		if (mysqli_connect_errno())
		{
  			die("Failed to connect to MySQL: " . mysqli_connect_error());
		}
	}

	function checklogin($destination)
	{
		if( $_SESSION['logged']==0)
		{
			header("Location: $destination");
			exit();
		}
	}

	function checkadmin($destination)
	{
		if( $_SESSION['admin']==0)
		{
			header("Location: $destination");
			exit();
		}
	}
?>