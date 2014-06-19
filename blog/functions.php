<?php
	require("config.php");

	function sql_con_check()
	{
		if (mysqli_connect_errno())
		{
  			die("Failed to connect to MySQL: " . mysqli_connect_error());
		}
	}

	function checklogin()
	{
		if( $_SESSION['logged']==0)
		{
			header("Location: login.php");
		}
	}

	function checkadmin()
	{
		if( $_SESSION['admin']==0)
		{
			header("Location: home.php");
		}
	}
?>